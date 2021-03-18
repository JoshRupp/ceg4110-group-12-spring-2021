<?php

namespace App\Models\Weapon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property int $order_id
 * @property string $weapon_type
 * @property int $rarity
 * @property string $category
 * @property int $previous_weapon_id
 * @property int $create_recipe_id
 * @property int $upgrade_recipe_id
 * @property int $attack
 * @property int $attack_true
 * @property int $affinity
 * @property int $defense
 * @property int $slot_1
 * @property int $slot_2
 * @property int $slot_3
 * @property string $element1
 * @property int $element1_attack
 * @property string $element2
 * @property int $element2_attack
 * @property boolean $element_hidden
 * @property string $elderseal
 * @property string $sharpness
 * @property boolean $sharpness_maxed
 * @property boolean $craftable
 * @property boolean $final
 * @property string $kinsect_bonus
 * @property string $phial
 * @property int $phial_power
 * @property string $shelling
 * @property int $shelling_level
 * @property string $notes
 * @property int $coating_close
 * @property int $coating_power
 * @property int $coating_paralysis
 * @property int $coating_poison
 * @property int $coating_sleep
 * @property int $coating_blast
 * @property int $ammo_id
 * @property WeaponAmmo $weaponAmmo
 * @property RecipeItem $recipeItem
 * @property Weapon $weapon
 */
class Weapon extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'weapon';

    /**
     * @var array
     */
    protected $fillable = ['order_id', 'weapon_type', 'rarity', 'category', 'previous_weapon_id', 'create_recipe_id', 'upgrade_recipe_id', 'attack', 'attack_true', 'affinity', 'defense', 'slot_1', 'slot_2', 'slot_3', 'element1', 'element1_attack', 'element2', 'element2_attack', 'element_hidden', 'elderseal', 'sharpness', 'sharpness_maxed', 'craftable', 'final', 'kinsect_bonus', 'phial', 'phial_power', 'shelling', 'shelling_level', 'notes', 'coating_close', 'coating_power', 'coating_paralysis', 'coating_poison', 'coating_sleep', 'coating_blast', 'ammo_id'];

    /** @var array */
    protected $casts = [
        'rarity' => 'int',
        'attack' => 'int',
        'attack_true' => 'int',
        'affinity'=> 'int',
        'slot_1' => 'int',
        'slot_2' => 'int',
        'slot_3' => 'int',
        'element1_attack' => 'int',
        'element2_attack' => 'int',
        'element_hidden' => 'boolean',
        'sharpness_maxed' => 'boolean',
        'craftable' => 'boolean',
        'final' => 'boolean',
        'phial_power' => 'int',
        'shelling_level' => 'int',
        'coating_close' => 'boolean',
        'coating_power' => 'boolean',
        'coating_paralysis' => 'boolean',
        'coating_poison' => 'boolean',
        'coating_sleep' => 'boolean',
        'coating_blast' => 'boolean'
    ];

    /** @var bool */
    public $timestamps = false;

    public function weaponText(): HasMany
    {
        return $this->hasMany(WeaponText::class, 'id', 'id');
    }

    public function weaponAmmo(): BelongsTo
    {
        return $this->belongsTo(WeaponAmmo::class, 'ammo_id');
    }

    public function weaponSkill(): HasMany
    {
        return $this->hasMany(WeaponSkill::class, 'weapon_id', 'id');
    }

    public function recipeItemCreate(): HasMany
    {
        return $this->hasMany(RecipeItem::class, 'recipe_id', 'create_recipe_id');
    }

    public function recipeItemUpgrade(): HasMany
    {
        return $this->hasMany(RecipeItem::class, 'recipe_id', 'upgrade_recipe_id');
    }

    public function previousWeapon(): BelongsTo
    {
        return $this->belongsTo(__CLASS__, 'previous_weapon_id');
    }

    public function upgrade(): HasMany
    {
        return $this->hasMany(__CLASS__, 'previous_weapon_id', 'id');
    }
}
