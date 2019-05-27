<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestDiet extends Model
{
    use SoftDeletes;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'request_diets';

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
    protected $fillable = ['stage_one', 'stage_two', 'stage_three', 'stage_four', 'stage_five', 'stage_six', 'stage_seven', 'stage_eight', 'stage_nine' , 'user_id', 'doctor_id', 'state'];

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
