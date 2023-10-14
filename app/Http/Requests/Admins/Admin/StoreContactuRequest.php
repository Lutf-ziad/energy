<?php

namespace App\Http\Requests\Admins\Admin;

use App\Rules\NameRule;
use App\Rules\PhoneRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactuRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'    => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'numeric', new PhoneRule()],
             'active' => ['integer', 'in:0,1'],
        ];
    }
}
