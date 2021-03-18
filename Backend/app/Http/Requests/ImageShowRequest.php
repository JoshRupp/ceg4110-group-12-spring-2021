<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ImageShowRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $types = array_keys(config('image.images'));

        return [
            'type' => ['required', Rule::in($types)],
            'colour' => ['regex:/^([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/']
        ];
    }

    public function messages(): array
    {
        $types = implode(', ', array_keys(config('image.images')));

        return [
            'type.in' => "Type must be one of the following: $types",
            'colour.regex' => 'Hex code is invalid.'
        ];
    }

    public function all($keys = null): array
    {
        $request = parent::all();
        $request['type'] = $this->route('type');
        return $request;
    }
}
