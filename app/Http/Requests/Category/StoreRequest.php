<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:50|unique:categories',
            'slug' => 'required|min:3|max:50|unique:categories',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Title is required',
            'title.min' => 'Title min is 3',
            'title.max' => 'Title max is 50',
            'title.unique' => 'Title must be unique',
            'slug.required' => 'Slug is required',
            'slug.min' => 'Slug min is 3',
            'slug.max' => 'Slug max is 50',
            'slug.unique' => 'Slug must be unique',
        ];
    }
}
