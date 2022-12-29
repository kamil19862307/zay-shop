<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required'],
            'price' => ['required', 'integer'],
            'rating' => ['required', 'digits_between:1,5'],
            'comments' => ['required', 'integer'],
            'brand' => ['required'],
            'description' => ['required'],
            'color' => ['required'],
            'specification' => ['required'],
            'thumbnail' => ['required', 'image'],
        ];
    }
}
