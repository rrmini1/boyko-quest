<?php
declare(strict_types=1);

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'name'  => 'required|string|between:2,255',
            'email' => 'required|string|email|max:50|'. Rule::unique('users')->ignore($this->user),
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => '"Имя пользователя"'
        ];
    }

    public function getName(): string
    {
        return $this->validated('name');
    }
}
