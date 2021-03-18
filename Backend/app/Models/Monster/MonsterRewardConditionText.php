<?php

namespace App\Models\Monster;

use App\Models\Language\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $lang_id
 * @property string $name
 * @property Language $language
 */
class MonsterRewardConditionText extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'monster_reward_condition_text';

    /**
     * @var array
     */
    protected $fillable = ['name'];

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }
}
