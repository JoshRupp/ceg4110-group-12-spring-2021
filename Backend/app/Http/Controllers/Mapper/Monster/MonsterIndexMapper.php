<?php

namespace App\Http\Controllers\Mapper\Monster;

class MonsterIndexMapper
{
    private array $monsters;

    public function __construct(array $monsters)
    {
        $this->monsters = $monsters;
    }

    public function get(): array
    {
        $urls = [];

        foreach ($this->monsters as $monster) {
            $url = route('monster.show', $monster->id);

            $urls[] = [
                'id' => (int) $monster->id,
                'name' => $monster->name,
                'size' => $monster->size,
                'species' => $monster->ecology,
                'url' => $url
            ];
        }

        return $urls;
    }
}
