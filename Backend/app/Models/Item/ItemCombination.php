<?php

namespace App\Models\Item;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $result_id
 * @property int $first_id
 * @property int $second_id
 * @property int $quantity
 */
class ItemCombination extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item_combination';

    /** @var array */
    protected $fillable = ['result_id', 'first_id', 'second_id', 'quantity'];

    public function firstItem(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'first_id');
    }
    public function secondItem(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'second_id');
    }

    public function resultItem(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'result_id');
    }
}
