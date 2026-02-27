<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|min:3',
            'slug' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
            'img' => 'required|image',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.min' => 'Il titolo deve avere almeno :min caratteri.',
            'slug.required' => 'Lo slug è obbligatorio.',
            'excerpt.required' => 'L\'estratto è obbligatorio.',
            'content.required' => 'Il contenuto è obbligatorio.',
            'img.required' => 'L\'immagine è obbligatoria.',
            'img.image' => 'Il file deve essere un\'immagine valida.',
        ];
    }
}
