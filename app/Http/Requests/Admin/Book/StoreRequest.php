<?php

namespace App\Http\Requests\Admin\Book;

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
            'title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string',
            'file' => 'required|file|mimes:txt',
            'image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Необходимы строчные данные',
            'description.required' => 'Это поле необходимо для заполнения',
            'description.string' => 'Необходимы строчные данные',
            'author.required' => 'Это поле необходимо для заполнения',
            'author.string' => 'Необходимы строчные данные',
            'file.required' => 'Это поле необходимо для заполнения',
            'file.file' => 'Необходимо выбрать файл',
            'file.mimes' => 'Формат файла должен быть .txt',
            'image.required' => 'Это поле необходимо для заполнения',
            'image.file' => 'Необходимо выбрать файл',
            'category_id.required' => 'Это поле необходимо для заполнения',
            'category_id.integer' => 'ID категории должен быть числом',
            'category_id.exists' => 'ID категории должен быть в базе данных',
        ];
    }
}
