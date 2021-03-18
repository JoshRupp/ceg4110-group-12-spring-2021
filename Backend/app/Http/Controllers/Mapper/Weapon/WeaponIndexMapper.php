<?php

namespace App\Http\Controllers\Mapper\Weapon;

use Illuminate\Database\Eloquent\Collection;

class WeaponIndexMapper
{
    private array $weapons;

    public function __construct(array $weapons)
    {
        $this->weapons = $weapons;
    }

    public function get(): array
    {
        $weapons = [];
        foreach ($this->weapons as $weapon) {
            $url = route('weapon.show', $weapon->id);

            $weapons[] = [
                'id' => (int) $weapon->id,
                'name' => $weapon->name,
                'type' => $weapon->type,
                'rarity' => (int) $weapon->rarity,
                'url' => $url
            ];
        }

        return $weapons;
    }
}
