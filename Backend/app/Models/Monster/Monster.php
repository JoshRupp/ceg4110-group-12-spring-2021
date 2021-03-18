<?php

namespace App\Models\Monster;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $order_id
 * @property string $size
 * @property string $icon
 * @property boolean $pitfall_trap
 * @property boolean $shock_trap
 * @property boolean $vine_trap
 * @property boolean $has_weakness
 * @property boolean $has_alt_weakness
 * @property int $weakness_fire
 * @property int $weakness_water
 * @property int $weakness_ice
 * @property int $weakness_thunder
 * @property int $weakness_dragon
 * @property int $weakness_poison
 * @property int $weakness_sleep
 * @property int $weakness_paralysis
 * @property int $weakness_blast
 * @property int $weakness_stun
 * @property int $alt_weakness_fire
 * @property int $alt_weakness_water
 * @property int $alt_weakness_ice
 * @property int $alt_weakness_thunder
 * @property int $alt_weakness_dragon
 * @property int $alt_weakness_poison
 * @property int $alt_weakness_sleep
 * @property int $alt_weakness_paralysis
 * @property int $alt_weakness_blast
 * @property int $alt_weakness_stun
 * @property string $ailment_roar
 * @property string $ailment_wind
 * @property string $ailment_tremor
 * @property boolean $ailment_defensedown
 * @property boolean $ailment_fireblight
 * @property boolean $ailment_waterblight
 * @property boolean $ailment_thunderblight
 * @property boolean $ailment_iceblight
 * @property boolean $ailment_dragonblight
 * @property boolean $ailment_blastblight
 * @property boolean $ailment_regional
 * @property boolean $ailment_poison
 * @property boolean $ailment_sleep
 * @property boolean $ailment_paralysis
 * @property boolean $ailment_bleed
 * @property boolean $ailment_stun
 * @property boolean $ailment_mud
 * @property boolean $ailment_effluvia
 */
class Monster extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'monster';

    /** @var array */
    protected $fillable = ['order_id', 'size', 'icon', 'pitfall_trap', 'shock_trap', 'vine_trap', 'has_weakness', 'has_alt_weakness', 'weakness_fire', 'weakness_water', 'weakness_ice', 'weakness_thunder', 'weakness_dragon', 'weakness_poison', 'weakness_sleep', 'weakness_paralysis', 'weakness_blast', 'weakness_stun', 'alt_weakness_fire', 'alt_weakness_water', 'alt_weakness_ice', 'alt_weakness_thunder', 'alt_weakness_dragon', 'alt_weakness_poison', 'alt_weakness_sleep', 'alt_weakness_paralysis', 'alt_weakness_blast', 'alt_weakness_stun', 'ailment_roar', 'ailment_wind', 'ailment_tremor', 'ailment_defensedown', 'ailment_fireblight', 'ailment_waterblight', 'ailment_thunderblight', 'ailment_iceblight', 'ailment_dragonblight', 'ailment_blastblight', 'ailment_regional', 'ailment_poison', 'ailment_sleep', 'ailment_paralysis', 'ailment_bleed', 'ailment_stun', 'ailment_mud', 'ailment_effluvia'];

    /** @var array */
    protected $casts =[
        'weakness_fire' => 'int',
        'weakness_water' => 'int',
        'weakness_ice' => 'int',
        'weakness_thunder' => 'int',
        'weakness_dragon' => 'int',
        'weakness_poison' => 'int',
        'weakness_sleep' => 'int',
        'weakness_paralysis' => 'int',
        'weakness_blast' => 'int',
        'weakness_stun' => 'int',
    ];

    public function monsterText(): HasMany
    {
        return $this->hasMany(MonsterText::class, 'id', 'id');
    }

    public function monsterHabitat(): HasMany
    {
        return $this->hasMany(MonsterHabitat::class, 'monster_id', 'id');
    }

    public function monsterReward(): HasMany
    {
        return $this->hasMany(MonsterReward::class, 'monster_id', 'id');
    }

    public function monsterBreak(): HasMany
    {
        return $this->hasMany(MonsterBreak::class, 'monster_id', 'id');
    }

    public function monsterHitzone(): HasMany
    {
        return $this->hasMany(MonsterHitzone::class);
    }
}
