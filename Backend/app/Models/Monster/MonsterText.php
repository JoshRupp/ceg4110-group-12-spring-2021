<?php

namespace App\Models\Monster;

use App\Models\Language\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $lang_id
 * @property string $name
 * @property string $ecology
 * @property string $description
 * @property string $alt_state_description
 * @property Language $language
 * @property Monster $monster
 */
class MonsterText extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'monster_text';

    /** @var array */
    protected $fillable = ['name', 'ecology', 'description', 'alt_state_description'];

    public function monster(): BelongsTo
    {
        return $this->belongsTo(Monster::class, 'id', 'id');
    }
}
