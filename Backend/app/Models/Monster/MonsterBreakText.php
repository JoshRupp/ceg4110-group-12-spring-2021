<?php

namespace App\Models\Monster;

use App\Models\Language\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $lang_id
 * @property string $part_name
 * @property Language $language
 * @property MonsterBreak $monsterBreak
 */
class MonsterBreakText extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'monster_break_text';

    /** @var array */
    protected $fillable = ['part_name'];

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }

    public function monsterBreak(): BelongsTo
    {
        return $this->belongsTo(MonsterBreak::class, 'id');
    }
}
