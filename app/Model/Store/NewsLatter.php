<?php

namespace App\Model\Store;

use Illuminate\Database\Eloquent\Model;

class NewsLatter extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'news_latters';

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
    protected $fillable = ['email'];

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
