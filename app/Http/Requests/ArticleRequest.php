<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
                'title'      => 'required|string|min:3|max:100',
                'text'     => 'required|string|min:3|max:200',
                'categories' => 'required|array',
                'price' => 'required|integer'
        ];
    }
}
