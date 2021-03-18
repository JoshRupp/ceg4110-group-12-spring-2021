<?php

namespace App\Models\Item;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $category
 * @property string $subcategory
 * @property int $rarity
 * @property int $buy_price
 * @property int $sell_price
 * @property int $carry_limit
 * @property int $points
 * @property string $icon_name
 * @property string $icon_color
 */
class Item extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item';

    /** @var array */
    protected $fillable = [
        'category',
        'subcategory',
        'rarity',
        'buy_price',
        'sell_price',
        'carry_limit',
        'points',
        'icon_name',
        'icon_color'
    ];

    protected $casts = [
        'buy_price' => 'int',
        'sell_price' => 'int',
    ];

    public function itemText(): HasMany
    {
        return $this->hasMany(ItemText::class, 'id');
    }

    public function itemCombination(): HasMany
    {
        return $this->hasMany(ItemCombination::class, 'result_id');
    }
}
