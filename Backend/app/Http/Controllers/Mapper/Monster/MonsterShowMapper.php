<?php

namespace App\Http\Controllers\Mapper\Monster;


use Illuminate\Database\Eloquent\Model;

class MonsterShowMapper
{
    private array $monster;

    public function __construct(array $monster)
    {
        $this->monster = $monster;
    }

    public function get(): array
    {
        $fieldMapper = new MonsterShowFieldMapper($this->monster);
        return [
            'name' => $fieldMapper->getName(),
            'size' => $fieldMapper->getSize(),
            'species' => $fieldMapper->getSpecies(),
            'icon' => $fieldMapper->getIcon(),
            'colour' => $fieldMapper->getColour(),
            'description' => $fieldMapper->getDescription(),
            'traps' => $fieldMapper->getTraps(),
            'ailments' => $fieldMapper->getAilments(),
            'weaknesses' => $fieldMapper->getWeaknesses(),
            'locations' => $fieldMapper->getLocations(),
            'rewards' => $fieldMapper->getRewards(),
            'breaks' => $fieldMapper->getBreaks(),
            'hitzones' => $fieldMapper->getHitzones()
        ];
    }
}
