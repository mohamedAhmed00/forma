<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\Store\CategoryInterface;
use App\Repository\Interfaces\Store\ClientInterface;
use App\Repository\Interfaces\Store\FeatureInterface;
use App\Repository\Interfaces\Store\InstgramChannleInterface;
use App\Repository\Interfaces\Store\MainSettingInterface;
use App\Repository\Interfaces\Store\NewsInterface;
use App\Repository\Interfaces\Store\OfferInterface;
use App\Repository\Interfaces\Store\ProductInterface;
use App\Repository\Interfaces\Store\SliderInterface;
use App\Repository\Interfaces\Store\SliderSayInterface;
use App\Repository\Interfaces\Store\SubcategoryInterface;

class SportStoreController extends Controller
{
    /*
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function index(
        MainSettingInterface $mainSetting,CategoryInterface $category,SliderInterface $slider,ProductInterface $product,
        OfferInterface $offer,NewsInterface $news,FeatureInterface $feature,
        ClientInterface $client,InstgramChannleInterface $instgramChannle,SliderSayInterface $sliderSay)
    {
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $sliders = $slider->getSliderImages();
        $featuredProducts = $product->getSomeProduct('is_featured');
        $newProducts = $product->getNewProduct();
        $offers = $offer->getOffer();
        $sliderSays = $sliderSay->getSlider();
        $features = $feature->getFeature();
        $news = $news->getNews();
        $instgramChannles = $instgramChannle->getInstgramChannle();
        $clients = $client->getClient();
        $page = 'home';
        return view('online_store.index',compact(['featuredProducts','newProducts','category','setting','sliders','offers','sliderSays','features','news','instgramChannles','clients','categories','page']));
    }

    /*
     * @param int $id
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function cate(int $id,MainSettingInterface $mainSetting,CategoryInterface $category)
    {
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $category = $category->getCategoryById($id);
        if($category->title == 'For Ladies')
        {
            $featureProduct = $category->Products()->where('is_featured','yes')->get();
            $subcategory = $category->SubCategory;
            $products = $category->Products()->limit(8)->get();
            $page = $category->title;
             return view('online_store.woman',compact(['setting','category','products','subcategory','featureProduct','categories','page']));
        }
        else
        {
            if(isset($category->SubCategory[0]->id))
            {
                $products = $category->SubCategory[0]->products()->paginate(20);
            }
            $subcategory = $category->SubCategory;
            $page = $category->title;
            return view('online_store.category',compact(['setting','category','products','subcategory','categories','page']));
        }
    }

    /*
     * @param int $id
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function subcate(int $id,MainSettingInterface $mainSetting,CategoryInterface $category,SubcategoryInterface $subcategory)
    {
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $subcategory = $subcategory->getSubcategoryById($id);
        $products = $subcategory->Products()->paginate(20);
        $page = $subcategory->Category->title;
        return view('online_store.subcategory',compact(['setting','subcategory','products','category','categories','page']));
    }

    /*
     * @param int $id
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function product (int $id,MainSettingInterface $mainSetting,CategoryInterface $category,ProductInterface $product){
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        $product = $product->getProduct($id);
        $page = "shop";
        return view('online_store.product',compact(['setting','product','page','categories']));
    }

    /*
     * @param string $flage
     * @auther Nader Ahmed
     * @return Mix
     * */
    public function filter(string $flage,MainSettingInterface $mainSetting,CategoryInterface $category,ProductInterface $product)
    {
        $products = $product->getProductByFlages($flage);
        $page = 'shop';
        $setting = $mainSetting->getMain();
        $categories = $category->getCategory();
        return view('online_store.filter',compact(['setting','products','categories','page']));

    }

}
