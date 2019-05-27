<?php

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\News;
use App\Model\Forma\NewsCategory;
use App\Model\Forma\NewsSubcategory;
use App\Repository\Interfaces\Forma\SubCategoryNewsInterface;

class SubCategoryNewsElequent extends BaseElequent implements SubCategoryNewsInterface
{

    /**
     * @var
     */
    protected $subCategoryNews;

    /**
     * NewsElequent constructor.
     * @author Nader Ahmed
     */
    public function __construct()
    {
        $this->subCategoryNews = new NewsSubcategory();
        parent::__construct($this->subCategoryNews);
    }
}
