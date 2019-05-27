<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\Store\CategoryInterface;
use App\Repository\Interfaces\Store\MainSettingInterface;
use App\Repository\Interfaces\Store\ProductInterface;
use Illuminate\Http\Request;

class FilterProductController extends Controller
{
    /*
     * param Request $request
     * @auther Nader Ahmed
     * @return view
     * */
    public function productSearchByName(Request $request,MainSettingInterface $mainSetting,CategoryInterface $category,ProductInterface $product)
    {
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $category = $category->getCategoryById($request->all()['category']);
        $page = $category->title;
        $products = $product->FilterProductByName((string) $request->all()['productname'],(int) $category->id);
        $subcategory = $category->SubCategory;
        return view('online_store.search',compact(['setting','products','category','categories','page','subcategory']));
    }

    /*
     * param Request $request
     * @auther Nader Ahmed
     * @return view
     * */
    public function productSearchByPrice(Request $request,MainSettingInterface $mainSetting,CategoryInterface $category,ProductInterface $product)
    {
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $category = $category->getCategoryById($request->all()['category']);
        $page = $category->title;
        $subcategory = $category->SubCategory;
        $products = $product->FilterProductByPrice((int)$category->id,$request->all()['min'],$request->all()['max']);
        return view('online_store.search',compact(['setting','products','categories','page','subcategory','category']));
    }

    /*
     * param Request $request
     * @auther Nader Ahmed
     * @return view
     * */
    public function productSearchByColor(Request $request,MainSettingInterface $mainSetting,CategoryInterface $category,ProductInterface $product)
    {
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $category = $category->getCategoryById($request->all()['category']);
        $color = $request->all()['color'];
        $page = $category->title;
        $subcategory = $category->SubCategory;

        if($color == 'any')
        {
            $products = $category->Products()->paginate(20);;
        }
        else
        {
            $products = $product->FilterProductByColor($category->id,$color);
        }
        return view('online_store.search',compact(['setting','products','category','categories','page','subcategory']));
    }

    /*
     * param Request $request
     * @auther Nader Ahmed
     * @return view
     * */
    public function productSearchBySize(Request $request,MainSettingInterface $mainSetting,CategoryInterface $category,ProductInterface $product)
    {
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $category = $category->getCategoryById($request->all()['category']);
        $size = $request->all()['size'];
        $page = $category->title;
        $subcategory = $category->SubCategory;
        if($size == 'any')
        {
            $products = $category->Products()->paginate(20);;
        }
        else
        {
            $products = $product->FilterProductBySize($category->id,$size);
        }
        return view('online_store.search',compact(['setting','products','category','data','categories','page','subcategory','id']));
    }
}
