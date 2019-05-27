<?php

namespace App\Model\Store;

use Illuminate\Database\Eloquent\Model;

class MainSetting extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'main_settings';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['logo', 'favicon', 'title', 'meta_auther', 'meta_description', 'meta_keyword', 'header_description', 'footer_title', 'linkedin', 'twitter', 'facebook', 'instgram', 'subscript_title', 'subscript_description', 'crossfit_title', 'crossfit_description', 'crossfit_video'];

    protected $connection = 'sportStore';
    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}
