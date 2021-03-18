<?php

namespace App\Models\Weapon;

use App\Models\Item\Item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $recipe_id
 * @property int $item_id
 * @property int $quantity
 * @property Item $item
 */
class RecipeItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recipe_item';

    /** @var array */
    protected $fillable = ['quantity'];

    /** @var array */
    protected $casts = [
        'quantity' => 'int'
    ];

    /** @var bool */
    public $timestamps = false;

    public function item(): HasMany
    {
        return $this->hasMany(Item::class, 'id', 'item_id');
    }
}
