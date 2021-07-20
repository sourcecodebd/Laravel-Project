<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CExcelRequest extends FormRequest
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
            'file'=>'required|max:50000|mimes:xlsx,doc,docx,ppt,pptx,ods,odt,odp'
        ];
    }

    public function messages(){
        return [

            //
        ];
    }
}
