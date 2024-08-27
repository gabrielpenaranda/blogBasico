<?php

namespace App\Http\Requests\Post;

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
            'title' => 'required|min:3|max:500',
            'slug' => 'required|unique:posts|min:3|max:500',
            'content' => 'required|min:3',
            'category_id' => 'required|integer',
            'description' => 'required|min:3',
            'posted' => 'required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Title is required',
            'title.min' => 'Min 3 characters',
            'title.max' => 'Max 3 characters',
            'slug.required' => 'Slug is required',
            'slug.min' => 'Min 3 characters',
            'slug.max' => 'Max 3 characters',
        ];
    }
}
