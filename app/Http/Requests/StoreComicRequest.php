<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:50',
            'price' => 'required',
            'type' => 'required',

        ];
    }

    public function messages()
    {

        return [
            'title.required' => 'Il campo del titolo è obbligatorio',
            'price.required' => 'Il campo del prezzo è obbligatorio',
            'type.required' => 'Il campo del tipo è obbligatorio',
            'title.min' => 'Il campo del titolo deve contenere almeno :min caratteri',
            'title.max' => 'Il campo del titolo deve contenere al massimo :max caratteri',
        ];

    }
}
