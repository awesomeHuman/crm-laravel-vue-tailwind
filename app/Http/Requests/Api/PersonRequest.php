<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'person_first_name' => 'required',
            'person_last_name' => 'required',
            'companies_id' => 'required',
            'person_email' => 'required|max:35',
            'person_phone' => 'required|min:11|max:25',
            'mod_id' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            'person_first_name' => 'Kişi Adı',
            'person_last_name' => 'Kişi Soyad',
            'companies_id' => 'Şirket Adı',
            'person_email' => 'Kişi E-mail',
            'person_phone' => 'Kişi Telefon',
            'mod_id' => 'Mod',
        ];
    }
}
