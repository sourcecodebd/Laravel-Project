<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AMessageRequest extends FormRequest
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
            'admin_message' => 'required|min:2|bail',
            'admin_name' => 'required|min:3|max:30|regex:/[a-zA-Z]/i',
        ];
    }

    public function messages()
    {
        return [

            'admin_name.required' => "Admin Name can't be empty...",

            'admin_name.min' => "Admin Name can't be less than 3 characters...",

            'admin_name.max' => "Admin Name can't be more than 30 characters...",

            'admin_name.regex' => "Admin Name must be in letter...",

            'admin_message.required' => "Admin Message can't be empty...",

            'admin_message.min' => "Admin Message must be minimum 2 characters...",


        ];
    }
}
