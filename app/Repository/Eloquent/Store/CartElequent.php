<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/8/19
 * Time: 7:44 PM
 */

namespace App\Repository\Eloquent\Store;

use App\Model\Store\Product;
use App\Repository\Interfaces\Store\CartInterface;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class CartElequent implements CartInterface
{
    /*
     * @param Product $product
     * @auther Nader Ahmed
     * @return Object
     * */
    public function addItemToCart(Product $product)
    {
        Cart::instance('cart')->add(['id' => $product->id, 'name' => $product->title, 'qty' => 1, 'price' =>  $product->price,'options' => ['image' => isset($product->Images[0])? $product->Images[0]->image : '']]);
    }

    /*
     * @param string $id
     * @auther Nader Ahmed
     * @return Object
     * */
    public function RemoveItemFromCart(string $id)
    {
        Cart::instance('cart')->remove($id);
    }

    /*
     * @param Request $request
     * @auther Nader Ahmed
     * @return void
     * */
    public function updateCart(Request $request)
    {
        $data = $request->all();
        foreach($data['id'] as $key=>$d) {
            Cart::instance('cart')->update($data['id'][$key],$data['qty'][$key]);
        }
    }

    /*
     * @auther Nader Ahmed
     * @return string
     * */
    public function parseHtml()
    {
        $cart = Cart::instance('cart')->content();

        $html = '<a href="cart/index.html" class="cmsmasters_dynamic_cart_button">
                    <span class="cmsmasters_theme_icon_basket">'. Cart::instance('cart')->count() .'</span></a><span
                            class="cmsmasters_dynamic_cart_button_hide"></span>
<div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">';
        foreach($cart as $item){
            $images =  $this->getProductImages($item->id);
            $image = isset($images[0])? $images[0]->image:'';
            $html .= '<li class="woocommerce-mini-cart-item mini_cart_item">
                     
                            <button data-title="'. $item->rowId .'" class="remove remove_from_cart_button">×</button>
                   
                     <a href="'.url("product/".$item->id).'">
                        <img src="http://storeback.forma-eg.com/images/product/'. $image .'" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" sizes="(max-width: 540px) 100vw, 540px" width="540" height="540">'.$item->name.'</a>
                        <span class="quantity">'.$item->qty.' × 
                            <span class="woocommerce-Price-amount amount">
                                <span>
                                    <span class="woocommerce-Price-currencySymbol">L.E</span>
                                </span>' . $item->price .' 
                            </span>
                        </span>
                 </li>';
        }
        $html .= '                                                  
                    </ul>

                        <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">L.E </span></span>'.Cart::instance('cart')->subtotal().'</span>
                        </p>


                        <p class="woocommerce-mini-cart__buttons buttons"><a href="'.url('cart').'" class="button wc-forward">View cart</a><a href="'.url('checkout').'" class="button checkout wc-forward">Checkout</a></p>

                 </div>';
        return $html;
    }

    private function getProductImages(int $id){
        $product = Product::find($id);
        return $product->Images;
    }
}