<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EquipmentImageRequest extends FormRequest
{
    public function rules(): array
    {
        $rarities = array_keys(config('image.rarities'));
        $weapons = config('equipment');

        return [
            'name' => Rule::in($weapons),
            'rarity' => Rule::in($rarities)
        ];
    }

    public function all($keys = null): array
    {
        $request = parent::all();
        $request['name'] = $this->route('name');
        return $request;
    }
}
