<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'feedback' => 'required|min:2|bail',
            'username' => 'required|min:3|max:30|regex:/[a-zA-Z0-9]/i',
            'dor'=>'required',
            'myfile' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'review'=> 'required|in:Satisfactory,Its Okay,Not Satisfactory' 
        ];
    }

    public function messages()
    {
        return [

            'username.required' => "Username can't be empty...",

            'username.min' => "Username can't be less than 3 characters...",

            'username.max' => "Username can't be more than 30 characters...",

            'username.regex' => "Username must be in alphanumeric...",

            'feedback.required' => "Feedback can't be empty...",

            'feedback.min' => "Feedback must be minimum 2 characters...",

            'dor.required' => "Date of Reviewing must be selected...",

            'myfile.required' => "Profile Picture must be uploaded...",

            'myfile.mimes' => "Profile Picture should be in jpeg, png, jpg, gif, svg format...",

            'myfile.max' => "The size of Profile Picture must be lower than 2048 kb...",

            'review.required' => "Review option must be selected...",


        ];
    }
}
