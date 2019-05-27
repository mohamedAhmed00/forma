<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\Forma\CategoryNewsInterface;
use App\Repository\Interfaces\Forma\NewsInterface;
use App\Repository\Interfaces\Forma\SubCategoryNewsInterface;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class NewsController extends Controller
{

    /**
     * @param int $id
     * @return Mix View
     * @auther Nader Ahmed
     * */
    public function SingleNews(int $id,NewsInterface $news)
    {
        if (Cache::has('news:'.$id) ) {
            return Cache::get('news:'.$id);
        }
        else
        {
            $news = $news->getById($id);
            $page =  View::make('news', compact(['news']))->render();
            Cache::forever('news:'.$id, $page);
            return $page;
        }
    }

    /**
     * @param int $id
     * @return Mix View
     * @auther Nader Ahmed
     * */
    public function AllSubCategoryNews($id,CategoryNewsInterface $categoryNews)
    {
        if (Cache::has('subcategory:'.$id) ) {
            return Cache::get('subcategory:'.$id);
        }
        else
        {
            $category = $categoryNews->getById($id);
            $page =  View::make('subcategory', compact(['category']))->render();
            Cache::forever('subcategory:'.$id, $page);
            return $page;
        }
    }
    /**
     * @param int $id
     * @return Mix View
     * @auther Nader Ahmed
     * */
    public function AllNewsInSubCategory($id,SubCategoryNewsInterface $subCategoryNews)
    {
        if (Cache::has('news-subcategory:'.$id) ) {
            return Cache::get('news-subcategory:'.$id);
        }
        else
        {
            $subcategory = $subCategoryNews->getById($id);
            $page =  View::make('news-subcategory', compact(['subcategory']))->render();
            Cache::forever('news-subcategory:'.$id, $page);
            return $page;
        }
    }
}
