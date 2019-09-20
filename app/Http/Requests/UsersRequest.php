<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsersRequest extends Request
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
    public function rules()
    {
        return [

            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'role_id' => 'required',
            'is_active' => 'required',
            'password' => [
                'required',
                'string',
                'min:6',             // must be at least 10 characters in length
                'max:20',//
                'confirmed',
            ],


        ];
    }
}
