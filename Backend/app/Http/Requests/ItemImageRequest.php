<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ItemImageRequest extends FormRequest
{
    public function rules(): array
    {
        $items = config('items');
        $colours = array_keys(config('image.colours'));

        return [
            'name' => Rule::in($items),
            'colour' => Rule::in($colours)
        ];
    }

    public function all($keys = null): array
    {
        $request = parent::all();
        $request['name'] = $this->route('name');
        return $request;
    }
}
