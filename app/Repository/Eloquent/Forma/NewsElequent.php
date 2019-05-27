<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:27 AM
 */

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\News;
use App\Model\Forma\NewsCategory;
use App\Model\Forma\NewsSubcategory;
use App\Repository\Interfaces\Forma\NewsInterface;

class NewsElequent extends BaseElequent implements NewsInterface
{

    /**
     * @var
     */
    protected $news;

    /**
     * NewsElequent constructor.
     * @author Nader Ahmed
     */
    public function __construct()
    {
        $this->news = new News();
        parent::__construct($this->news);
    }

}
