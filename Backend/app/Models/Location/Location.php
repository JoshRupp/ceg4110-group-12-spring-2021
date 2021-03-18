<?php

namespace App\Models\Location;

use App\Models\Language\Language;
use App\Models\Monster\MonsterHabitat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $lang_id
 * @property int $order_id
 * @property string $name
 * @property Language $language
 */
class Location extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'location_text';

    /** @var array */
    protected $fillable = ['order_id', 'name'];

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }

    public function monsterHabitat(): hasMany
    {
        return $this->hasMany(MonsterHabitat::class, 'location_id', 'id');
    }
}
