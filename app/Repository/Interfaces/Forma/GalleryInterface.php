<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:25 AM
 */

namespace App\Repository\Interfaces\Forma;


interface GalleryInterface
{
    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getAthleteGallery(int $id);
}
