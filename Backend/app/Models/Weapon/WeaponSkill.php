<?php

namespace App\Models\Weapon;

use App\Models\Skill\Skilltree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $weapon_id
 * @property int $skilltree_id
 * @property int $level
 * @property Skilltree $skilltree
 * @property Weapon $weapon
 */
class WeaponSkill extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'weapon_skill';

    /** @var array */
    protected $fillable = ['level'];

    /** @var array */
    protected $casts = [
        'level' => 'int'
    ];

    /** @var bool */
    public $timestamps = false;

    public function skilltree(): BelongsTo
    {
        return $this->belongsTo(Skilltree::class, 'skilltree_id', 'id');
    }

    public function weapon(): BelongsTo
    {
        return $this->belongsTo(Weapon::class, 'weapon_id', 'id');
    }
}
