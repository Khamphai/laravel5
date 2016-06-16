<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreBooksRequest extends Request
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
            'title' => 'required',
            'price' => 'required',
            'typebooks_id' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'กรุณากรอกชือหนงัสือ',
            'price.required' => 'กรุณากรอกราคา',
            'typebooks_id.required' => 'กรุณาเลือกหมวดหนงัสือ',
            'image.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกลุ jpeg,jpg,png',
        ];
    }
}
