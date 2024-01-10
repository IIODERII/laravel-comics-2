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
            'title.required' => 'You have to insert a title',
            'price.required' => 'You have to insert a price',
            'type.required' => 'You have to insert a type',
            'title.min' => 'The minimum number of characters for the title is :min',
            'title.max' => 'The maximum number of characters for the title is :max',
        ];

    }
}
