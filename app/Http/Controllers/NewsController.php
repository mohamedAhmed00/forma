<?php

namespace App\Http\Controllers;

use App\Model\Forma\NewsCategory;
use App\Repository\Interfaces\Forma\NewsInterface;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    /*
     * @param int $id
     * @return Mix View
     * @auther Nader Ahmed
     * */
    public function SingleNews(int $id,NewsInterface $news)
    {
        $page = "new";
        $news = $news->getSingleNews($id);
        return view('single_news',compact(['news','page']));
    }

    /*
     * @param int $id
     * @return Mix View
     * @auther Nader Ahmed
     * */
    public function AllSubCategoryNews($id,NewsInterface $category)
    {
        $page = "new";
        $category = $category->getCategoryNewsById($id);
        return view('more_news_subcategory', compact(['category','page']));

    }
    /*
     * @param int $id
     * @return Mix View
     * @auther Nader Ahmed
     * */
    public function AllNewsInSubCategory($id,NewsInterface $category)
    {
        $page = "new";
        $subcategory = $category->AllNewsInSubCategory($id);
        return view('more_news', compact(['subcategory','page']));
    }
}
