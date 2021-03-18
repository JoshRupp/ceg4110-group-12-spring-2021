<?php

namespace App\Models\Weapon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $notes
 * @property WeaponMelody $weaponMelody
 */
class WeaponMelodyNotes extends Model
{
    /** @var array */
    protected $fillable = [];

    /** @var bool */
    public $timestamps = false;

    public function weaponMelody(): BelongsTo
    {
        return $this->belongsTo(WeaponMelody::class, 'id');
    }
}
