<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/9/19
 * Time: 2:27 AM
 */

namespace App\Repository\Eloquent\Store;

use App\Repository\Interfaces\Store\FeeInterface;
use App\Repository\Interfaces\Store\ProfileInterface;
use Cart;
use App\Http\Requests\Order;
use App\Repository\Interfaces\Store\OrderInterface;
use Illuminate\Support\Facades\Mail;

class OrderElequent implements OrderInterface
{

    /*
     * @param int $id
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function getOrder(int $id)
    {
        return \App\Model\Store\Order::find($id);
    }

    /*
     * @param Order $request
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function saveOrder(Order $request,ProfileInterface $profile,FeeInterface $fee)
    {
        if(isEmpty(Cart::instance('cart')->content()))
        {
            \request()->session()->put('message','Your Cart is Empty');
            return 0;
        }
        $data = $request->all();
        $order = $this->saveOrderCustomer($data,$profile,$fee);
        $mailData = $this->ProductOrder($order);
        $this->sendEmail($mailData,$data,$profile,$fee);
        \request()->session()->put('message','Your Order is done');
    }

    /*
     * @param array $data
     * @auther Nader Ahmed
     * */
    private function saveOrderCustomer($data,ProfileInterface $profile,FeeInterface $fee)
    {
        $user = $profile->getUserProfile();
        $order = new \App\Model\Store\Order();
        $order->user_id = $user->id;
        $order->order_email = $user->email ;
        $order->order_mobile = $user->mobile ;
        $order->address  = $data['address'];
        $order->additional_info  = $data['order_comments'];
        $order->date   = Date('Y-m-d');
        $order->delivaryFees_id   = $data['delivaryFees_id'];
        $order->total   = $fee->getFees($data['delivaryFees_id']) ;
        $order->save();
        return $order;
    }

    /*
     * @param array $order
     * @auther Nader Ahmed
     * */
    private function ProductOrder($order)
    {
        $productOrder = new \App\Model\Store\ProductOrder();
        foreach(Cart::instance('cart')->content() as $item)
        {
            $mailData['product'][] = $item;
            $productOrder->qty = $item->qty;
            $productOrder->order_id = $order->id;
            $productOrder->product_id = $item->id;
            $productOrder->save();
            Cart::instance('cart')->remove($item->rowId);
        }

        return $mailData;
    }

    /*
     * @param $mailData,$data,ProfileInterface $profile,FeeInterface $fee
     * @auther Nader Ahmed
     * */
    private function sendEmail($mailData,$data,ProfileInterface $profile,FeeInterface $fee)
    {
        $user = $profile->getUserProfile();
        $mailData['customer_name'] = $user->fullName;
        $mailData['customer_mobile'] = $user->mobile;
        $mailData['customer_location'] = $fee->getFeesById($data['delivaryFees_id'])->locations;
        $mailData['customer_email'] = $user->email;
        $mailData['customer_gender'] = $user->gender;
        $mailData['order_address'] =  $data['address'];
        $mailData['order_date'] =  Date('Y-m-d');
        $mailData['order_comment'] =  $data['order_comments'];
        $mailData['order_total'] =  $fee->getFees($data['delivaryFees_id']);
        $mailData['order_payment'] =  'cash on delevery';

        Mail::send(new \App\Mail\Order($mailData));
    }

}