<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CRechargeRequest extends FormRequest
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
            'username' => 'required|min:3|max:30|regex:/[a-zA-Z0-9]/i',
            'card_no' => 'required|digits:5',
            'email' => 'required|email:rfc|max:50|min:10',
            'bank_name' =>'required|min:5|max:30|regex:/[a-zA-Z]/i' ,
            'mr' => 'required|min:2|max:4|regex:/^\d+(\.\d{1,2})?$/',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'myfile' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => "Username can't be empty...",
            'username.min' => "Username must be minimum 3 characters...",
            'username.max' => "Username can't exceed 30 characters...",
            'username.regex' => "Username must be in alphanumeric...",

            'card_no.required' => "Card Number must be filled up...",
            'card_no.digits' => "Card Number is invalid...",

            'email.required' => "Email can't be empty...",
            'email.min' => "Email must be minimum 10 characters...",
            'email.max' => "Email can't exceed 50 characters...",
            'email.email' => "Email format is invalid...",

            'bank_name.required' => "Bank Name can't be empty...",
            'bank_name.min' => "Bank Name must be minimum 5 characters...",
            'bank_name.max' => "Bank Name can't exceed 30 characters...",
            'bank_name.regex' => "Bank Name must be in letter...",

            'mr.required' => "Amount  for Mobile Recharge can't be empty...",
            'mr.min' => "Amount  for Mobile Recharge must be minimum 2 digits...",
            'mr.max' => "Amount  for Mobile Recharge can't exceed 4 digits...",
            'mr.regex' => "Amount  for Mobile Recharge must be decimal value...",

            'phone.required' => "Phone Number can't be empty...",
            'phone.regex' => "Phone Number is invalid...",

            'myfile.required' => "Profile Picture must be uploaded...",
            'myfile.mimes' => "Profile Picture should be in jpeg, png, jpg, gif, svg format...",
            'myfile.max' => "The size of Profile Picture must be lower than 2048 kb...",
        ];
    }
}
