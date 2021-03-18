<?php

namespace App\Models\Weapon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $base_duration
 * @property int $base_extension
 * @property int $m1_duration
 * @property int $m1_extension
 * @property int $m2_duration
 * @property int $m2_extension
 */
class WeaponMelody extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'weapon_melody';

    /** @var array */
    protected $fillable = ['base_duration', 'base_extension', 'm1_duration', 'm1_extension', 'm2_duration', 'm2_extension'];

    /** @var array */
    protected $casts = [
        'base_duration' => 'int',
        'base_extension' => 'int',
        'm1_duration' => 'int',
        'm1_extension' => 'int',
        'm2_duration' => 'int',
        'm2_extension' => 'int',
    ];

    /** @var bool */
    public $timestamps = false;

    public function weaponMelodyNotes(): HasMany
    {
        return $this->hasMany(WeaponMelodyNotes::class, 'id', 'id');
    }

    public function weaponMelodyText(): HasMany
    {
        return $this->hasMany(WeaponMelodyText::class, 'id', 'id');
    }
}
