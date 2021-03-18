<?php

namespace App\Http\Controllers\Mapper\Weapon;

class WeaponShowMapper
{
    private array $weapon;

    public function __construct(array $weapon)
    {
        $this->weapon = $weapon;
    }

    public function get(): array
    {
        $fieldMapper = new WeaponShowFieldMapper($this->weapon);
        return [
            'name' => $fieldMapper->getName(),
            'type' => $fieldMapper->getType(),
            'rarity' => $fieldMapper->getRarity(),
            'icon' => $fieldMapper->getIcon(),
            'category' => $fieldMapper->getCategory(),
            'attack' => $fieldMapper->getAttack(),
            'true_attack' => $fieldMapper->getTrueAttack(),
            'affinity' => $fieldMapper->getAffinity(),
            'defense' => $fieldMapper->getDefense(),
            'elderseal' => $fieldMapper->getElderseal(),
            'slots' => $fieldMapper->getDecoSlots(),
            'elements' => $fieldMapper->getElements(),
            'sharpness' => $fieldMapper->getSharpness(),
            'skills' => $fieldMapper->getSkills(),
            'crafting' => [
                'craftable' => $fieldMapper->getCraftable(),
                'final' => $fieldMapper->getFinal(),
                'crafting_cost' => $fieldMapper->getCraftingCost(),
                'previous_weapon' => $fieldMapper->getPreviousWeapon(),
                'upgrades' => $fieldMapper->getUpgrades(),
            ],
            'kinsect_bonus' => $fieldMapper->getKinsectBonus(),
            'phial' => $fieldMapper->getPhial(),
            'shelling' => $fieldMapper->getShelling(),
            'coatings' => $fieldMapper->getCoatings(),
            'ammo' => $fieldMapper->getAmmo(),
            'melodies' => $fieldMapper->getMelodies()
        ];
    }
}
