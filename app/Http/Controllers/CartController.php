<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\Store\CartInterface;
use App\Repository\Interfaces\Store\CategoryInterface;
use App\Repository\Interfaces\Store\MainSettingInterface;
use App\Repository\Interfaces\Store\ProductInterface;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(MainSettingInterface $mainSetting,CategoryInterface $category)
    {
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $page = "shop";
        return view('online_store.cart',compact(['setting','page','categories']));
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,CartInterface $cart , ProductInterface $product)
    {
        $cart->addItemToCart($product->getProduct($id));
        $html = $cart->parseHtml();
        return response()->json(['res' => $html],200,[]);
    }

    /**
     * Remove the specified resource from storage.
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id , CartInterface $cart , ProductInterface $product)
    {
        $cart->RemoveItemFromCart( $id);
        $html = $cart->parseHtml();
        return response()->json(['res' => $html],200,[]);
    }

    /**
     * Remove the specified resource from storage.
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function removeItem(string $id, CartInterface $cart)
    {
        $cart->RemoveItemFromCart($id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function cartUpdate(Request $request,CartInterface $cart)
    {
        $cart->updateCart($request);
        return redirect()->back();
    }
}