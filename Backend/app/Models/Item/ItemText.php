<?php

namespace App\Models\Item;

use App\Models\Language\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $lang_id
 * @property string $name
 * @property string $description
 * @property Language $language
 * @property Item $item
 */
class ItemText extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item_text';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description'];

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'id');
    }
}
