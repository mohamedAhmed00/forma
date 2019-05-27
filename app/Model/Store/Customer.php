<?php

namespace App\Model\Store;

use App\Notifications\CustomerResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable;


    protected $table = 'f_publicusers_2019';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fid', 'fullName', 'profile', 'email', 'mobile', 'gender', 'firebaseid',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomerResetPassword($token));
    }

    /*
     * @auther Nader Ahmed
     * @return Collection
     * */
    public function Order()
    {
        return $this->hasMany(Order::class,'user_id');
    }
}
