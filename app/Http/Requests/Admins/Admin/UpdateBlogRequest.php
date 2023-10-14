<?php

namespace App\Http\Requests\Admins\Admin;

use App\Models\Shop;
use App\Rules\ExistRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
            'name'    => ['required', 'min:3', 'max:255'],
            'descrption'    => ['required','max:1000'],
            'image' => ['nullable', 'image', 'mimes:'.config('app.ALLOED_IMAGE_EXTENSIONS'), 'max:'.config('app.ALLOED_IMAGE_SIZE')],
            'active'  => ['required', 'integer', 'in:0,1'],
        ];
    }
}
