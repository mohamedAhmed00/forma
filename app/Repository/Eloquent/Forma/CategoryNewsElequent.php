<?php

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\News;
use App\Model\Forma\NewsCategory;
use App\Model\Forma\NewsSubcategory;
use App\Repository\Interfaces\Forma\CategoryNewsInterface;

class CategoryNewsElequent extends BaseElequent implements CategoryNewsInterface
{

    /**
     * @var
     */
    protected $categoryNews;

    /**
     * NewsElequent constructor.
     * @author Nader Ahmed
     */
    public function __construct()
    {
        $this->categoryNews = new NewsCategory();
        parent::__construct($this->categoryNews);
    }
}
