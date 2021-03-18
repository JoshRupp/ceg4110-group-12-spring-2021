<?php

namespace App\Models\Monster;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $monster_id
 * @property int $flinch
 * @property int $wound
 * @property int $sever
 * @property string $extract
 * @property Monster $monster
 */
class MonsterBreak extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'monster_break';

    /** @var array */
    protected $fillable = ['monster_id', 'flinch', 'wound', 'sever', 'extract'];

    /** @var array */
    protected $casts =[
        'id' => 'int',
        'monster_id' => 'int',
        'flinch' => 'int',
        'wound' => 'int',
        'sever' => 'int',
        'extract' => 'int',
    ];

    public function monster(): BelongsTo
    {
        return $this->belongsTo(Monster::class, 'monster_id', 'id');
    }

    public function monsterBreakText(): HasMany
    {
        return $this->hasMany(MonsterBreakText::class, 'id', 'id');
    }
}
