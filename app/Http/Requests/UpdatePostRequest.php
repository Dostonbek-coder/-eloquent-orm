<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class UpdatePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:10',
            'price' => 'required|numeric|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Sarlavha yozish majburiy.',
            'title.min' => 'Sarlavha kamida 3 ta belgi bolishi kerak.',
            'description.required' => 'Tavsif majburiy maydon.',
            'description.min' => 'Tavsif kamida 10 ta belgi bolishi kerak.',
            'price.required' => 'Narx majburiy.',
            'price.numeric' => 'Narx son bolishi kerak.',
            'price.min' => 'Narx manfiy bolishi mumkin emas.',
        ];
    }
}