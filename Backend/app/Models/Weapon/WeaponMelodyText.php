<?php

namespace App\Models\Weapon;

use App\Models\Language\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $lang_id
 * @property string $name
 * @property string $effect1
 * @property string $effect2
 * @property Language $language
 * @property WeaponMelody $weaponMelody
 */
class WeaponMelodyText extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'weapon_melody_text';

    /** @var array */
    protected $fillable = ['name', 'effect1', 'effect2'];

    /** @var bool */
    public $timestamps = false;

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }

    public function weaponMelody(): BelongsTo
    {
        return $this->belongsTo(WeaponMelody::class, 'id');
    }
}
