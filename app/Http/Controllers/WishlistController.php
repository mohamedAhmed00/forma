<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\Store\CategoryInterface;
use App\Repository\Interfaces\Store\MainSettingInterface;
use App\Repository\Interfaces\Store\ProductInterface;
use App\Repository\Interfaces\Store\WishlistInterface;

class WishlistController extends Controller
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
        return view('online_store.wishlist',compact(['setting','page','categories']));
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,WishlistInterface $wishlist,ProductInterface $product)
    {
        $action = $wishlist->checkItemToRemoveIt($id);
        $action = $action == 'remove' ? 'remove' : 'add' ;
        if($action == 'add')
        {
            $count = $wishlist->addItemToWishlist($product->getProduct($id));
        }
        else
        {
            $count = $wishlist->count();
        }
        return response()->json(['count' => $count,'action'=>$action],200,[]);
    }

    /**
     * Remove the specified resource from storage.
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function removeItem(string $id,WishlistInterface $wishlist)
    {
        $wishlist->RemoveItemFromWishlist($id);
        return redirect()->back();
    }
}
