<?php

namespace App\Http\Controllers\Mapper\Monster;

use App\Http\Controllers\Mapper\BaseMapper;
use Illuminate\Database\Eloquent\Model;
use stdClass;

class MonsterShowFieldMapper extends BaseMapper
{
    private const DEFAULT_COLOUR = 'white';

    private stdClass $details;
    private array $habitats;
    private array $rewards;
    private array $breaks;
    private array $hitzones;

    public function __construct(array $monster)
    {
        $this->details = $monster['details'];
        $this->habitats = $monster['habitats'];
        $this->rewards = $monster['rewards'];
        $this->breaks = $monster['breaks'];
        $this->hitzones = $monster['hitzones'];
    }

    public function getName(): string
    {
        return $this->details->name;
    }

    public function getSpecies(): ?string
    {
        return $this->details->ecology;
    }

    public function getIcon(): string
    {
        return route('image.monster', [$this->details->id]);
    }

    public function getColour(): ?string
    {
        config('image.colours');
        return $this->details->colour
            ? '#' . config('image.colours')[strtolower($this->details->colour)]
            : null;
    }

    public function getSize(): string
    {
        return $this->details->size;
    }

    public function getDescription(): ?string
    {
        return $this->details->description;
    }

    public function getTraps(): array
    {
        return [
            'pitfall' => (bool) $this->details->pitfall_trap,
            'shock' => (bool) $this->details->shock_trap,
            'vine' => (bool) $this->details->vine_trap,
        ];
    }

    public function getAilments(): array
    {
        return [
            'roar' => (bool) $this->details->ailment_roar,
            'wind' => (bool) $this->details->ailment_wind,
            'tremor' => (bool) $this->details->ailment_tremor,
            'defense_down' => (bool) $this->details->ailment_defensedown,
            'fire_blight' => (bool) $this->details->ailment_fireblight,
            'water_blight' => (bool) $this->details->ailment_waterblight,
            'thunder_blight' => (bool) $this->details->ailment_thunderblight,
            'ice_blight' => (bool) $this->details->ailment_iceblight,
            'dragon_blight' => (bool) $this->details->ailment_dragonblight,
            'blast_blight' => (bool) $this->details->ailment_blastblight,
            'regional' => (bool) $this->details->ailment_regional,
            'poison' => (bool) $this->details->ailment_poison,
            'sleep' => (bool) $this->details->ailment_sleep,
            'paralysis' => (bool) $this->details->ailment_paralysis,
            'bleed' => (bool) $this->details->ailment_bleed,
            'stun' => (bool) $this->details->ailment_stun,
            'mud' => (bool) $this->details->ailment_mud,
            'effluvia' => (bool) $this->details->ailment_effluvia,
        ];
    }

    public function getWeaknesses(): array
    {
        return [
            'fire' => (int) $this->details->weakness_fire,
            'water' => (int) $this->details->weakness_water,
            'ice' => (int) $this->details->weakness_ice,
            'thunder' => (int) $this->details->weakness_thunder,
            'dragon' => (int) $this->details->weakness_dragon,
            'poison' => (int) $this->details->weakness_poison,
            'sleep' => (int) $this->details->weakness_sleep,
            'paralysis' => (int) $this->details->weakness_paralysis,
            'blast' => (int) $this->details->weakness_blast,
            'stun' => (int) $this->details->weakness_stun,
        ];
    }

    public function getLocations(): array
    {
        $locations = [];
        foreach ($this->habitats as $habitat) {
            $locations[] = [
                'location' => $habitat->name,
                'start_area' => $habitat->start_area,
                'move_area' => $habitat->move_area,
                'rest_area' => $habitat->rest_area
            ];
        }

        return $locations;
    }

    public function getRewards(): array
    {
        $rewards = [];
        foreach ($this->rewards as $reward) {
            $condition = $reward->condition;
            $rankName = $this->formatFieldForJSON($reward->rank);
            $conditionName = $this->formatFieldForJSON($condition);

            $url = route(
                'item.show',
                $reward->id
            );

            $iconUrl = null;
            if ($reward->icon_name !== null) {
                $iconUrl = route(
                    'image.item',
                    [
                        strtolower($reward->icon_name),
                        'colour' => $reward->icon_color ? strtolower($reward->icon_color) : self::DEFAULT_COLOUR
                    ]
                );
            }

            $rewards[$rankName][$conditionName][] = [
                'material' => $reward->name,
                'url' => $url,
                'icon_url' => $iconUrl,
                'stack' => (int) $reward->stack,
                'percentage' => (int) $reward->percentage
            ];
        }

        return $rewards;
    }

    public function getBreaks(): array
    {
        $breaks = [];
        foreach ($this->breaks as $break) {
            $partName = $this->formatFieldForJSON($break->name);

            $breaks[$partName] = [
                'flinch' => (int) $break->flinch,
                'wound' => (int) $break->wound,
                'sever' => (int) $break->sever,
                'extract' => (int) $break->extract
            ];
        }

        return $breaks;
    }

    public function getHitzones(): array
    {
        $hitzones = [];
        foreach ($this->hitzones as $hitzone) {
            $zoneName = $this->formatFieldForJSON($hitzone->name);

            $hitzones[$zoneName] = [
                'cut' => (int) $hitzone->cut,
                'impact' => (int) $hitzone->impact,
                'shot' => (int) $hitzone->shot,
                'fire' => (int) $hitzone->fire,
                'water' => (int) $hitzone->water,
                'ice' => (int) $hitzone->ice,
                'thunder' => (int) $hitzone->thunder,
                'dragon' => (int) $hitzone->dragon,
                'ko' => (int) $hitzone->ko,
            ];
        }

        return $hitzones;
    }
}
