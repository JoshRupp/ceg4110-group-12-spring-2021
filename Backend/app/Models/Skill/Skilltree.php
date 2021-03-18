<?php

namespace App\Models\Skill;

use App\Models\Weapon\WeaponSkill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $max_level
 * @property string $icon_color
 * @property int $secret
 * @property int $unlocks_id
 * @property Skilltree $skilltree
 */
class Skilltree extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skilltree';

    /** @var array */
    protected $fillable = ['max_level', 'icon_color', 'secret', 'unlocks_id'];

    /** @var array */
    protected $casts = [
        'max_level' => 'int'
    ];

    /** @var bool */
    public $timestamps = false;

    public function skilltreeText(): HasMany
    {
        return $this->hasMany(SkilltreeText::class, 'id', 'id');
    }

    public function weaponSkill(): HasMany
    {
        return $this->hasMany(WeaponSkill::class, 'skilltree_id', 'id');
    }
}
