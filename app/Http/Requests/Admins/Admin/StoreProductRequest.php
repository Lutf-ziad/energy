<?php

namespace App\Http\Requests\Admins\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'categorie_id' => ['required', 'integer', 'exists:categories,id'],
            'name' => ['required', 'string', 'max:255'],
            'picture' => ['nullable', 'image', 'mimes:'.config('app.ALLOED_IMAGE_EXTENSIONS'), 'max:'.config('app.ALLOED_IMAGE_SIZE')],
            'desc' => ['nullable', 'string'],
            'brand' => ['nullable', 'string'],
            'active' => ['required', 'integer', 'in:0,1'],

        ];
    }
}
