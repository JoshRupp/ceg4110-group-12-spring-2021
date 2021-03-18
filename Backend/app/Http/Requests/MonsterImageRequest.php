<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonsterImageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|exists:monster,id'
        ];
    }

    public function all($keys = null): array
    {
        $request = parent::all();
        $request['id'] = $this->route('id');
        return $request;
    }
}
