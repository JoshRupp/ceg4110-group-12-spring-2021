<?php

namespace App\Models\Skill;

use App\Models\Language\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $lang_id
 * @property string $name
 * @property string $description
 * @property Language $language
 * @property Skilltree $skilltree
 */
class SkilltreeText extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skilltree_text';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /** @var bool */
    public $timestamps = false;

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }

    public function skilltree(): BelongsTo
    {
        return $this->belongsTo(Skilltree::class, 'id');
    }
}
