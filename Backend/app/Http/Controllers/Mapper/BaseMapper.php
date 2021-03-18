<?php

namespace App\Http\Controllers\Mapper;

class BaseMapper
{
    public function formatFieldForJSON(string $field): string
    {
        $field = str_replace(' ', '_', $field);
        $field = preg_replace('/[^A-Za-z0-9\_]/', '', $field);

        return preg_replace('/_+/', '_', strtolower($field));
    }
}
