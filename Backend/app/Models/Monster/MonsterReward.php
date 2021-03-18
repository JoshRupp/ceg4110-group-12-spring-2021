<?php

namespace App\Models\Monster;

use App\Models\Item\Item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $monster_id
 * @property int $condition_id
 * @property string $rank
 * @property int $item_id
 * @property int $stack
 * @property int $percentage
 * @property Item $item
 * @property MonsterRewardConditionText $monsterRewardConditionText
 * @property Monster $monster
 */
class MonsterReward extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'monster_reward';

    /** @var array */
    protected $fillable = ['monster_id', 'condition_id', 'rank', 'item_id', 'stack', 'percentage'];

    /** @var array */
    protected $casts =[
        'stack' => 'int',
        'percentage' => 'int'
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }

    public function monsterRewardConditionText(): HasMany
    {
        return $this->hasMany(MonsterRewardConditionText::class, 'id', 'condition_id');
    }

    public function monster(): BelongsTo
    {
        return $this->belongsTo(Monster::class, 'monster_id');
    }
}
