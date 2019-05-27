<?php

namespace App\Http\Requests;

use App\Repository\Interfaces\Store\ProfileInterface;
use Illuminate\Illuminate\Http\FormRequest;

class SaveProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(ProfileInterface $profile)
    {
        return [
            'fullName' => 'required|max:255',
            'email' => 'required|email|max:255|unique:f_publicusers_2019,email,' . $profile->getUserProfile()->id,
            'gender' => 'required',
            'mobile' => 'required',
            'password' => 'nullable|min:6|confirmed',
        ];
    }
}
