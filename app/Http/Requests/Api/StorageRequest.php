<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class StorageRequest extends FormRequest
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
            //'file' => 'required|image:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'required|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf,docx|max:5120'
        ];
    }
    public function attributes()
    {
        return [
            'file' => 'Dosya',
        ];
    }
}
