<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'username' => 'required|unique:admin_table|min:3|max:30|regex:/[a-zA-Z0-9]/i',
            'password' => 'required|min:3|max:8',
            'email' => 'required|email:rfc|max:50|min:10',
            'name' =>'required|min:3|max:30|regex:/[a-zA-Z]/i' ,
            'father' => 'required|min:3|max:30|regex:/[a-zA-Z]/i',
            'mother' => 'required|min:3|max:30|regex:/[a-zA-Z]/i',
            'dob' => 'required',
            'gender' => 'required|in:Male,Female',
            'blood' => 'required',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'addr' => 'required',
            'type' => 'required',
            'nid' => 'required|digits:9',
            'myfile' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => "Username can't be empty...",
            'username.unique' => "Username has already been taken...",
            'username.min' => "Username must be minimum 3 characters...",
            'username.max' => "Username can't exceed 30 characters...",
            'username.regex' => "Username must be in alphanumeric...",

            'password.required' => "Password can't be empty...",
            'password.min' => "Password must be minimum 3 characters...",
            'password.max' => "Password can't exceed 8 characters...",

            'email.required' => "Email can't be empty...",
            'email.min' => "Email must be minimum 10 characters...",
            'email.max' => "Email can't exceed 50 characters...",
            'email.email' => "Email format is invalid...",

            'name.required' => "Name can't be empty...",
            'name.min' => "Name must be minimum 3 characters...",
            'name.max' => "Name can't exceed 30 characters...",
            'name.regex' => "Name must be in letter...",

            'father.required' => "Father/Spouse Name can't be empty...",
            'father.min' => "Father/Spouse Name must be minimum 3 characters...",
            'father.max' => "Father/Spouse Name can't exceed 30 characters...",
            'father.regex' => "Father/Spouse Name must be in letter...",

            'mother.required' => "Mother Name can't be empty...",
            'mother.min' => "Mother Name must be minimum 3 characters...",
            'mother.max' => "Mother Name can't exceed 30 characters...",
            'mother.regex' => "Mother Name must be in letter...",

            'dob.required' => "Date of Birth must be selected...",

            'blood.required' => "Blood Group category must be selected...",

            'gender.required' => "Gender must be selected...",
            'gender.in' => "Gender: Male, Female or Others...",

            'phone.required' => "Phone Number can't be empty...",
            'phone.regex' => "Phone Number is invalid...",

            'addr.required' => "Address can't be empty...",

            'type.required' => "User Type category must be selected...",
            
            'nid.required' => "NID Number must be filled up...",
            'nid.digits' => "NID Number is invalid...",

            'myfile.required' => "Profile Picture must be uploaded...",
            'myfile.mimes' => "Profile Picture should be in jpeg, png, jpg, gif, svg format...",
            'myfile.max' => "The size of Profile Picture must be lower than 2048 kb...",
        ];
    }
}
