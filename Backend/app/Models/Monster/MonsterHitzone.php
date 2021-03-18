<?php

namespace App\Models\Monster;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $monster_id
 * @property int $cut
 * @property int $impact
 * @property int $shot
 * @property int $fire
 * @property int $water
 * @property int $ice
 * @property int $thunder
 * @property int $dragon
 * @property int $ko
 * @property Monster $monster
 */
class MonsterHitzone extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'monster_hitzone';

    /** @var array */
    protected $fillable = ['monster_id', 'cut', 'impact', 'shot', 'fire', 'water', 'ice', 'thunder', 'dragon', 'ko'];

    /** @var array */
    protected $casts = [
        'cut' => 'int',
        'impact' => 'int',
        'shot' => 'int',
        'fire' => 'int',
        'water' => 'int',
        'ice' => 'int',
        'thunder' => 'int',
        'dragon' => 'int',
        'ko' => 'int',
    ];

    public function monster(): BelongsTo
    {
        return $this->belongsTo(Monster::class);
    }

    public function monsterHitzoneText(): HasMany
    {
        return $this->hasMany(MonsterHitzoneText::class, 'id', 'id');
    }
}
