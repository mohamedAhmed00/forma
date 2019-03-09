<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\Store\CategoryInterface;
use App\Repository\Interfaces\Store\Comparinterface;
use App\Repository\Interfaces\Store\MainSettingInterface;
use App\Repository\Interfaces\Store\ProductInterface;

class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(MainSettingInterface $mainSetting,CategoryInterface $category,Comparinterface $comparing)
    {
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $page = "shop";
        $compare = $comparing->getCompareContent();
        $compares = $comparing->getCompareContentChuncks(4);
        return view('online_store.compare',compact(['setting','page','categories','compares']));
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Comparinterface $comparing,ProductInterface $product)
    {
        $action = $comparing->checkItemToRemoveIt($id);
        $action = $action == 'remove' ? 'remove' : 'add' ;
        if($action == 'add')
        {
            $count = $comparing->addItemToCompare($product->getProduct($id));
        }
        else
        {
            $count = $comparing->count();
        }
        return response()->json(['count' => $count,'action'=>$action],200,[]);
    }

    public function removeItem($id,Comparinterface $comparing)
    {
        $comparing->RemoveItemFromCompare($id);
        return redirect()->back();
    }
}
