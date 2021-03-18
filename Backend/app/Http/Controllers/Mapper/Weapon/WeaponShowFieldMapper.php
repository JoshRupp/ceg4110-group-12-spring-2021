<?php

namespace App\Http\Controllers\Mapper\Weapon;

use Illuminate\Support\Facades\Config;
use stdClass;

class WeaponShowFieldMapper
{
    private const DEFAULT_RARITY = 1;

    private stdClass $details;
    private array $skills;
    private array $craftingMaterials;
    private array $upgrades;
    private ?stdClass $ammo;
    private ?array $melodies;

    public function __construct(array $weapon)
    {
        $this->details = $weapon['details'];
        $this->skills = $weapon['skills'];
        $this->craftingMaterials = $weapon['craftingMaterials'];
        $this->upgrades = $weapon['upgrades'];
        $this->ammo = $weapon['ammo'];
        $this->melodies = $weapon['melodies'];
    }

    public function getName(): string
    {
        return $this->details->name;
    }

    public function getType(): string
    {
        return $this->details->type;
    }

    public function getRarity(): int
    {
        return $this->details->rarity;
    }

    public function getIcon(): string
    {
        $rarity = $this->getRarity();

        return route(
            'image.equipment',
            [
                str_replace('-', '_', $this->getType()),
                'rarity' => $rarity
            ]
        );
    }

    public function getCategory(): ?string
    {
        return $this->details->category;
    }

    public function getAttack(): int
    {
        return $this->details->attack;
    }

    public function getTrueAttack(): int
    {
        return $this->details->true_attack;
    }

    public function getAffinity(): int
    {
        return $this->details->affinity;
    }

    public function getDefense(): int
    {
        return $this->details->defense;
    }

    public function getElderseal(): ?string
    {
        return $this->details->elderseal;
    }

    public function getDecoSlots(): array
    {
        return [
            'slot_1' => (int) $this->details->slot_1,
            'slot_2' => (int) $this->details->slot_2,
            'slot_3' => (int) $this->details->slot_3,
        ];
    }

    public function getElements(): array
    {
        $elements = [];
        if ($this->details->element1) {
            $elements[] = [
                'element' => $this->details->element1,
                'attack' => (int) $this->details->element1_attack,
                'hidden' => (bool) $this->details->element_hidden
            ];
        }

        if ($this->details->element2) {
            $elements[] = [
                'element' => $this->details->element2,
                'attack' => (int) $this->details->element2_attack,
                'hidden' => (bool) $this->details->element_hidden
            ];
        }

        return $elements;
    }

    public function getSharpness(): ?array
    {
        if ($this->details->sharpness === null) {
            return null;
        }

        $colours = Config::get('sharpness.names');
        $hits = array_map('intval', explode(',', $this->details->sharpness));
        $sharpness = [
            'maxed' => (bool) $this->details->sharpness_maxed
        ];

        $sharpness['values'] = array_combine($colours, $hits);

        return $sharpness;
    }

    public function getSkills(): ?array
    {
        if ($this->skills === null) {
            return null;
        }

        $skills = [];
        foreach ($this->skills as $skill) {
            $skills[] = [
                'name' => $skill->name,
                'level' => (int) $skill->level,
                'max_level' => (int) $skill->max_level,
                'is_secret' => (bool) $skill->secret
            ];
        }

        return $skills;
    }

    public function getCraftable(): bool
    {
        return $this->details->craftable;
    }

    public function getCraftingCost(): ?array
    {
        if (empty($this->craftingMaterials)) {
            return null;
        }

        $materials = [];
        foreach ($this->craftingMaterials as $item) {
            $materials[] = [
                'id' => (int) $item->id,
                'name' => $item->name,
                'quantity' => (int) $item->quantity
                // TODO: Add item url
            ];
        }

        return $materials;
    }

    public function getFinal(): bool
    {
        return $this->details->final;
    }

    public function getPreviousWeapon(): ?array
    {
        if ($this->details->previous_weapon_id === null) {
            return null;
        }

        return [
            'name' => $this->details->previous_weapon,
            'url' => route('weapon.show', $this->details->previous_weapon_id),
        ];
    }

    public function getUpgrades(): ?array
    {
        if (empty($this->upgrades)) {
            return null;
        }

        $upgrades = [];
        foreach ($this->upgrades as $upgrade) {
            $upgrades[] = [
                'weapon' => $upgrade->name,
                'url' => route('weapon.show', $upgrade->id)
            ];
        }

        return $upgrades;
    }

    public function getKinsectBonus(): ?string
    {
        return $this->details->kinsect_bonus;
    }

    public function getPhial(): ?array
    {
        if ($this->details->phial === null) {
            return null;
        }

        return [
            'type' => $this->details->phial,
            'power' => $this->details->phial_power
        ];
    }

    public function getShelling(): ?array
    {
        if ($this->details->shelling === null) {
            return null;
        }

        return [
            'type' => $this->details->shelling,
            'level' => (int) $this->details->shelling_level
        ];
    }

    public function getCoatings(): ?array
    {
        if ($this->details->coating_close === null) {
            return null;
        }

        return [
            'close' => (bool) $this->details->coating_close,
            'power' => (bool) $this->details->coating_power,
            'paralysis' => (bool) $this->details->coating_paralysis,
            'poison' => (bool) $this->details->coating_poison,
            'sleep' => (bool) $this->details->coating_sleep,
            'blast' => (bool) $this->details->coating_blast
        ];
    }

    public function getAmmo(): ?array
    {
        if ($this->ammo === null) {
            return null;
        }

        $ammo = new WeaponAmmoMapper($this->ammo);

        return $ammo->get();
    }

    public function getMelodies(): ?array
    {
        if (empty($this->melodies)) {
            return null;
        }

        $melodies = [];
        foreach ($this->melodies as $melody) {
            $melodies[] = [
                'name' => $melody->name,
                'notes' => $melody->notes,
                'effect_1' => $melody->effect1,
                'effect_2' => $melody->effect2,
                'base' => [
                    'duration' => (int) $melody->base_duration,
                    'extension' => (int) $melody->base_extension
                ],
                'maestro' => [
                    'level_1' => [
                        'duration' => (int) $melody->m1_duration,
                        'extension' => (int) $melody->m1_extension
                    ],
                    'level_2' => [
                        'duration' => (int) $melody->m2_duration,
                        'extension' => (int) $melody->m2_extension
                    ]
                ]
            ];
        }

        return $melodies;
    }
}
