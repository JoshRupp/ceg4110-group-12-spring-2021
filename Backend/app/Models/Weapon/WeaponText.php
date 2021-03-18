<?php

namespace App\Models\Weapon;

use App\Models\Language\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $lang_id
 * @property string $name
 * @property Language $language
 * @property Weapon $weapon
 */
class WeaponText extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'weapon_text';

    /** @var array */
    protected $fillable = ['name'];

    /** @var bool */
    public $timestamps = false;

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }

    public function weapon(): BelongsTo
    {
        return $this->belongsTo(Weapon::class, 'id');
    }
}
