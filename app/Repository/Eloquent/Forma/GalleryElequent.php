<?php
/**
 * Created by PhpStorm.
 * User: nader
 * Date: 2/4/19
 * Time: 1:27 AM
 */

namespace App\Repository\Eloquent\Forma;

use App\Model\Forma\PtGallery;
use App\Repository\Interfaces\Forma\GalleryInterface;

class GalleryElequent implements GalleryInterface
{
    /*
     * @param int $id
     * @return Mix
     * @auther Nader Ahmed
     * */
    public function getAthleteGallery(int $id)
    {
        return PtGallery::where('pt_id', $id)->get();
    }
}
