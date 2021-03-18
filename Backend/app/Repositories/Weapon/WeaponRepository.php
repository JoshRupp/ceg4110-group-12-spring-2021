<?php

namespace App\Repositories\Weapon;

use App\Repositories\BaseRepositoryInterface;
use App\Sources\Weapon\WeaponSource;

class WeaponRepository implements BaseRepositoryInterface
{
    private WeaponSource $src;

    public function __construct(WeaponSource $src)
    {
        $this->src = $src;
    }

    public function index(string $language): array
    {
        return $this->src->index($language);
    }

    public function show(int $id, string $language): array
    {
        $details = $this->src->getDetails($id, $language);

        return [
            'details' => $details,
            'skills' => $this->src->getSkills($id, $language),
            'craftingMaterials' => $this->src->getCraftingMaterials($id, $language),
            'upgrades' => $this->src->getUpgrades($id, $language),
            'ammo' => $this->src->getAmmo($id),
            'melodies' => $details->notes ? $this->src->getMelodies($details->notes, $language) : null
        ];
    }
}
