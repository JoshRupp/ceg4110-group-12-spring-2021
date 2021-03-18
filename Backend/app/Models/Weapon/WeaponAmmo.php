<?php

namespace App\Models\Weapon;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $deviation
 * @property string $special_ammo
 * @property int $normal1_clip
 * @property boolean $normal1_rapid
 * @property int $normal1_recoil
 * @property string $normal1_reload
 * @property int $normal2_clip
 * @property boolean $normal2_rapid
 * @property int $normal2_recoil
 * @property string $normal2_reload
 * @property int $normal3_clip
 * @property boolean $normal3_rapid
 * @property int $normal3_recoil
 * @property string $normal3_reload
 * @property int $pierce1_clip
 * @property boolean $pierce1_rapid
 * @property int $pierce1_recoil
 * @property string $pierce1_reload
 * @property int $pierce2_clip
 * @property boolean $pierce2_rapid
 * @property int $pierce2_recoil
 * @property string $pierce2_reload
 * @property int $pierce3_clip
 * @property boolean $pierce3_rapid
 * @property int $pierce3_recoil
 * @property string $pierce3_reload
 * @property int $spread1_clip
 * @property boolean $spread1_rapid
 * @property int $spread1_recoil
 * @property string $spread1_reload
 * @property int $spread2_clip
 * @property boolean $spread2_rapid
 * @property int $spread2_recoil
 * @property string $spread2_reload
 * @property int $spread3_clip
 * @property boolean $spread3_rapid
 * @property int $spread3_recoil
 * @property string $spread3_reload
 * @property int $sticky1_clip
 * @property boolean $sticky1_rapid
 * @property int $sticky1_recoil
 * @property string $sticky1_reload
 * @property int $sticky2_clip
 * @property boolean $sticky2_rapid
 * @property int $sticky2_recoil
 * @property string $sticky2_reload
 * @property int $sticky3_clip
 * @property boolean $sticky3_rapid
 * @property int $sticky3_recoil
 * @property string $sticky3_reload
 * @property int $cluster1_clip
 * @property boolean $cluster1_rapid
 * @property int $cluster1_recoil
 * @property string $cluster1_reload
 * @property int $cluster2_clip
 * @property boolean $cluster2_rapid
 * @property int $cluster2_recoil
 * @property string $cluster2_reload
 * @property int $cluster3_clip
 * @property boolean $cluster3_rapid
 * @property int $cluster3_recoil
 * @property string $cluster3_reload
 * @property int $recover1_clip
 * @property boolean $recover1_rapid
 * @property int $recover1_recoil
 * @property string $recover1_reload
 * @property int $recover2_clip
 * @property boolean $recover2_rapid
 * @property int $recover2_recoil
 * @property string $recover2_reload
 * @property int $poison1_clip
 * @property boolean $poison1_rapid
 * @property int $poison1_recoil
 * @property string $poison1_reload
 * @property int $poison2_clip
 * @property boolean $poison2_rapid
 * @property int $poison2_recoil
 * @property string $poison2_reload
 * @property int $paralysis1_clip
 * @property boolean $paralysis1_rapid
 * @property int $paralysis1_recoil
 * @property string $paralysis1_reload
 * @property int $paralysis2_clip
 * @property boolean $paralysis2_rapid
 * @property int $paralysis2_recoil
 * @property string $paralysis2_reload
 * @property int $sleep1_clip
 * @property boolean $sleep1_rapid
 * @property int $sleep1_recoil
 * @property string $sleep1_reload
 * @property int $sleep2_clip
 * @property boolean $sleep2_rapid
 * @property int $sleep2_recoil
 * @property string $sleep2_reload
 * @property int $exhaust1_clip
 * @property boolean $exhaust1_rapid
 * @property int $exhaust1_recoil
 * @property string $exhaust1_reload
 * @property int $exhaust2_clip
 * @property boolean $exhaust2_rapid
 * @property int $exhaust2_recoil
 * @property string $exhaust2_reload
 * @property int $flaming_clip
 * @property boolean $flaming_rapid
 * @property int $flaming_recoil
 * @property string $flaming_reload
 * @property int $water_clip
 * @property boolean $water_rapid
 * @property int $water_recoil
 * @property string $water_reload
 * @property int $freeze_clip
 * @property boolean $freeze_rapid
 * @property int $freeze_recoil
 * @property string $freeze_reload
 * @property int $thunder_clip
 * @property boolean $thunder_rapid
 * @property int $thunder_recoil
 * @property string $thunder_reload
 * @property int $dragon_clip
 * @property boolean $dragon_rapid
 * @property int $dragon_recoil
 * @property string $dragon_reload
 * @property int $slicing_clip
 * @property boolean $slicing_rapid
 * @property int $slicing_recoil
 * @property string $slicing_reload
 * @property int $wyvern_clip
 * @property string $wyvern_reload
 * @property int $demon_clip
 * @property int $demon_recoil
 * @property string $demon_reload
 * @property int $armor_clip
 * @property int $armor_recoil
 * @property string $armor_reload
 * @property int $tranq_clip
 * @property int $tranq_recoil
 * @property string $tranq_reload
 */
class WeaponAmmo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'weapon_ammo';

    /** @var array */
    protected $fillable = [
        'deviation',
        'special_ammo',
        'normal1_clip',
        'normal1_rapid',
        'normal1_recoil',
        'normal1_reload',
        'normal2_clip',
        'normal2_rapid',
        'normal2_recoil',
        'normal2_reload',
        'normal3_clip',
        'normal3_rapid',
        'normal3_recoil',
        'normal3_reload',
        'pierce1_clip',
        'pierce1_rapid',
        'pierce1_recoil',
        'pierce1_reload',
        'pierce2_clip',
        'pierce2_rapid',
        'pierce2_recoil',
        'pierce2_reload',
        'pierce3_clip',
        'pierce3_rapid',
        'pierce3_recoil',
        'pierce3_reload',
        'spread1_clip',
        'spread1_rapid',
        'spread1_recoil',
        'spread1_reload',
        'spread2_clip',
        'spread2_rapid',
        'spread2_recoil',
        'spread2_reload',
        'spread3_clip',
        'spread3_rapid',
        'spread3_recoil',
        'spread3_reload',
        'sticky1_clip',
        'sticky1_rapid',
        'sticky1_recoil',
        'sticky1_reload',
        'sticky2_clip',
        'sticky2_rapid',
        'sticky2_recoil',
        'sticky2_reload',
        'sticky3_clip',
        'sticky3_rapid',
        'sticky3_recoil',
        'sticky3_reload',
        'cluster1_clip',
        'cluster1_rapid',
        'cluster1_recoil',
        'cluster1_reload',
        'cluster2_clip',
        'cluster2_rapid',
        'cluster2_recoil',
        'cluster2_reload',
        'cluster3_clip',
        'cluster3_rapid',
        'cluster3_recoil',
        'cluster3_reload',
        'recover1_clip',
        'recover1_rapid',
        'recover1_recoil',
        'recover1_reload',
        'recover2_clip',
        'recover2_rapid',
        'recover2_recoil',
        'recover2_reload',
        'poison1_clip',
        'poison1_rapid',
        'poison1_recoil',
        'poison1_reload',
        'poison2_clip',
        'poison2_rapid',
        'poison2_recoil',
        'poison2_reload',
        'paralysis1_clip',
        'paralysis1_rapid',
        'paralysis1_recoil',
        'paralysis1_reload',
        'paralysis2_clip',
        'paralysis2_rapid',
        'paralysis2_recoil',
        'paralysis2_reload',
        'sleep1_clip',
        'sleep1_rapid',
        'sleep1_recoil',
        'sleep1_reload',
        'sleep2_clip',
        'sleep2_rapid',
        'sleep2_recoil',
        'sleep2_reload',
        'exhaust1_clip',
        'exhaust1_rapid',
        'exhaust1_recoil',
        'exhaust1_reload',
        'exhaust2_clip',
        'exhaust2_rapid',
        'exhaust2_recoil',
        'exhaust2_reload',
        'flaming_clip',
        'flaming_rapid',
        'flaming_recoil',
        'flaming_reload',
        'water_clip',
        'water_rapid',
        'water_recoil',
        'water_reload',
        'freeze_clip',
        'freeze_rapid',
        'freeze_recoil',
        'freeze_reload',
        'thunder_clip',
        'thunder_rapid',
        'thunder_recoil',
        'thunder_reload',
        'dragon_clip',
        'dragon_rapid',
        'dragon_recoil',
        'dragon_reload',
        'slicing_clip',
        'slicing_rapid',
        'slicing_recoil',
        'slicing_reload',
        'wyvern_clip',
        'wyvern_reload',
        'demon_clip',
        'demon_recoil',
        'demon_reload',
        'armor_clip',
        'armor_recoil',
        'armor_reload',
        'tranq_clip',
        'tranq_recoil',
        'tranq_reload'
    ];

    protected $casts = [
        'deviation' => 'int',
        'normal1_clip' => 'int',
        'normal1_rapid' => 'boolean',
        'normal1_recoil' => 'int',
        'normal2_clip' => 'int',
        'normal2_rapid' => 'boolean',
        'normal2_recoil' => 'int',
        'normal3_clip' => 'int',
        'normal3_rapid' => 'boolean',
        'normal3_recoil' => 'int',
        'pierce1_clip' => 'int',
        'pierce1_rapid' => 'boolean',
        'pierce1_recoil' => 'int',
        'pierce2_clip' => 'int',
        'pierce2_rapid' => 'boolean',
        'pierce2_recoil' => 'int',
        'pierce3_clip' => 'int',
        'pierce3_rapid' => 'boolean',
        'pierce3_recoil' => 'int',
        'spread1_clip' => 'int',
        'spread1_rapid' => 'boolean',
        'spread1_recoil' => 'int',
        'spread2_clip' => 'int',
        'spread2_rapid' => 'boolean',
        'spread2_recoil' => 'int',
        'spread3_clip' => 'int',
        'spread3_rapid' => 'boolean',
        'spread3_recoil' => 'int',
        'sticky1_clip' => 'int',
        'sticky1_rapid' => 'boolean',
        'sticky1_recoil' => 'int',
        'sticky2_clip' => 'int',
        'sticky2_rapid' => 'boolean',
        'sticky2_recoil' => 'int',
        'sticky3_clip' => 'int',
        'sticky3_rapid' => 'boolean',
        'sticky3_recoil' => 'int',
        'cluster1_clip' => 'int',
        'cluster1_rapid' => 'boolean',
        'cluster1_recoil' => 'int',
        'cluster2_clip' => 'int',
        'cluster2_rapid' => 'boolean',
        'cluster2_recoil' => 'int',
        'cluster3_clip' => 'int',
        'cluster3_rapid' => 'boolean',
        'cluster3_recoil' => 'int',
        'recover1_clip' => 'int',
        'recover1_rapid' => 'boolean',
        'recover1_recoil' => 'int',
        'recover2_clip' => 'int',
        'recover2_rapid' => 'boolean',
        'recover2_recoil' => 'int',
        'poison1_clip' => 'int',
        'poison1_rapid' => 'boolean',
        'poison1_recoil' => 'int',
        'poison2_clip' => 'int',
        'poison2_rapid' => 'boolean',
        'poison2_recoil' => 'int',
        'paralysis1_clip' => 'int',
        'paralysis1_rapid' => 'boolean',
        'paralysis1_recoil' => 'int',
        'paralysis2_clip' => 'int',
        'paralysis2_rapid' => 'boolean',
        'paralysis2_recoil' => 'int',
        'sleep1_clip' => 'int',
        'sleep1_rapid' => 'boolean',
        'sleep1_recoil' => 'int',
        'sleep2_clip' => 'int',
        'sleep2_rapid' => 'boolean',
        'sleep2_recoil' => 'int',
        'exhaust1_clip' => 'int',
        'exhaust1_rapid' => 'boolean',
        'exhaust1_recoil' => 'int',
        'exhaust2_clip' => 'int',
        'exhaust2_rapid' => 'boolean',
        'exhaust2_recoil' => 'int',
        'flaming_clip' => 'int',
        'flaming_rapid' => 'boolean',
        'flaming_recoil' => 'int',
        'water_clip' => 'int',
        'water_rapid' => 'boolean',
        'water_recoil' => 'int',
        'freeze_clip' => 'int',
        'freeze_rapid' => 'boolean',
        'freeze_recoil' => 'int',
        'thunder_clip' => 'int',
        'thunder_rapid' => 'boolean',
        'thunder_recoil' => 'int',
        'dragon_clip' => 'int',
        'dragon_rapid' => 'boolean',
        'dragon_recoil' => 'int',
        'slicing_clip' => 'int',
        'slicing_rapid' => 'boolean',
        'slicing_recoil' => 'int',
        'wyvern_clip' => 'int',
        'demon_clip' => 'int',
        'demon_recoil' => 'int',
        'armor_clip' => 'int',
        'armor_recoil' => 'int',
        'tranq_clip' => 'int',
        'tranq_recoil' => 'int',
    ];

    /** @var bool */
    public $timestamps = false;
}
