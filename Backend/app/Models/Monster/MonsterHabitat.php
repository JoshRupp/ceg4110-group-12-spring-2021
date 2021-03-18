<?php

namespace App\Models\Monster;

use App\Models\Location\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $monster_id
 * @property int $location_id
 * @property string $start_area
 * @property string $move_area
 * @property string $rest_area
 * @property Location $location
 * @property Monster $monster
 */
class MonsterHabitat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'monster_habitat';

    /** @var array */
    protected $fillable = ['monster_id', 'location_id', 'start_area', 'move_area', 'rest_area'];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function monster(): BelongsTo
    {
        return $this->belongsTo(Monster::class);
    }
}
