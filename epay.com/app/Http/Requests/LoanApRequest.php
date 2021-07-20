<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoanApRequest extends FormRequest
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
            'loanreq' => 'required|min:3|max:10|regex:/^\d+(\.\d{1,2})?$/',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => "Username can't be empty...",
            'username.min' => "Username must be minimum 3 characters...",
            'username.max' => "Username can't exceed 30 characters...",
            'username.regex' => "Username must be in alphanumeric...",

            'loanreq.required' => "Amount for Loanreq can't be empty...",
            'loanreq.min' => "Amount for Loanreq must be minimum 3 digits...",
            'loanreq.max' => "Amount for Loanreq can't exceed 10 digits...",
            'loanreq.regex' => "Amount for Loanreq must be decimal value...",
            
            'status.required' => "Loan Status must be required if it's pending or approved...",
        ];
    }
}
