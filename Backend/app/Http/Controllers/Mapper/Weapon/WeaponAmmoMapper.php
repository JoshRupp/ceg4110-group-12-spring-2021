<?php

namespace App\Http\Controllers\Mapper\Weapon;

use stdClass;

class WeaponAmmoMapper
{
    private stdClass $ammo;

    public function __construct(stdClass $ammo)
    {
        $this->ammo = $ammo;
    }

    public function get(): array
    {
        // TODO: Return null if ammo is not supported?
        return [
            'deviation' => (int) $this->ammo->deviation,
            'special' => $this->ammo->special_ammo,
            'normal' => [
                'normal_1' => [
                    'clip' => (int) $this->ammo->normal1_clip,
                    'rapid' => (int) $this->ammo->normal1_rapid,
                    'recoil' => (int) $this->ammo->normal1_recoil,
                    'reload' => $this->ammo->normal1_reload
                ],
                'normal_2' => [
                    'clip' => (int) $this->ammo->normal2_clip,
                    'rapid' => (int) $this->ammo->normal2_rapid,
                    'recoil' => (int) $this->ammo->normal2_recoil,
                    'reload' => $this->ammo->normal2_reload
                ],
                'normal_3' => [
                    'clip' => (int) $this->ammo->normal3_clip,
                    'rapid' => (int) $this->ammo->normal3_rapid,
                    'recoil' => (int) $this->ammo->normal3_recoil,
                    'reload' => $this->ammo->normal3_reload
                ]
            ],
            'pierce' => [
                'pierce_1' => [
                    'clip' => (int) $this->ammo->pierce1_clip,
                    'rapid' => (int) $this->ammo->pierce1_rapid,
                    'recoil' => (int) $this->ammo->pierce1_recoil,
                    'reload' => $this->ammo->pierce1_reload
                ],
                'pierce_2' => [
                    'clip' => (int) $this->ammo->pierce2_clip,
                    'rapid' => (int) $this->ammo->pierce2_rapid,
                    'recoil' => (int) $this->ammo->pierce2_recoil,
                    'reload' => $this->ammo->pierce2_reload
                ],
                'pierce_3' => [
                    'clip' => (int) $this->ammo->pierce3_clip,
                    'rapid' => (int) $this->ammo->pierce3_rapid,
                    'recoil' => (int) $this->ammo->pierce3_recoil,
                    'reload' => $this->ammo->pierce3_reload
                ]
            ],
            'spread' => [
                'spread_1' => [
                    'clip' => (int) $this->ammo->spread1_clip,
                    'rapid' => (int) $this->ammo->spread1_rapid,
                    'recoil' => (int) $this->ammo->spread1_recoil,
                    'reload' => $this->ammo->spread1_reload
                ],
                'spread_2' => [
                    'clip' => (int) $this->ammo->spread2_clip,
                    'rapid' => (int) $this->ammo->spread2_rapid,
                    'recoil' => (int) $this->ammo->spread2_recoil,
                    'reload' => $this->ammo->spread2_reload
                ],
                'spread_3' => [
                    'clip' => (int) $this->ammo->spread3_clip,
                    'rapid' => (int) $this->ammo->spread3_rapid,
                    'recoil' => (int) $this->ammo->spread3_recoil,
                    'reload' => $this->ammo->spread3_reload
                ]
            ],
            'sticky' => [
                'sticky_1' => [
                    'clip' => (int) $this->ammo->sticky1_clip,
                    'rapid' => (int) $this->ammo->sticky1_rapid,
                    'recoil' => (int) $this->ammo->sticky1_recoil,
                    'reload' => $this->ammo->sticky1_reload
                ],
                'sticky_2' => [
                    'clip' => (int) $this->ammo->sticky2_clip,
                    'rapid' => (int) $this->ammo->sticky2_rapid,
                    'recoil' => (int) $this->ammo->sticky2_recoil,
                    'reload' => $this->ammo->sticky2_reload
                ],
                'sticky_3' => [
                    'clip' => (int) $this->ammo->sticky3_clip,
                    'rapid' => (int) $this->ammo->sticky3_rapid,
                    'recoil' => (int) $this->ammo->sticky3_recoil,
                    'reload' => $this->ammo->sticky3_reload
                ]
            ],
            'cluster' => [
                'cluster_1' => [
                    'clip' => (int) $this->ammo->cluster1_clip,
                    'rapid' => (int) $this->ammo->cluster1_rapid,
                    'recoil' => (int) $this->ammo->cluster1_recoil,
                    'reload' => $this->ammo->cluster1_reload
                ],
                'cluster_2' => [
                    'clip' => (int) $this->ammo->cluster2_clip,
                    'rapid' => (int) $this->ammo->cluster2_rapid,
                    'recoil' => (int) $this->ammo->cluster2_recoil,
                    'reload' => $this->ammo->cluster2_reload
                ],
                'cluster_3' => [
                    'clip' => (int) $this->ammo->cluster3_clip,
                    'rapid' => (int) $this->ammo->cluster3_rapid,
                    'recoil' => (int) $this->ammo->cluster3_recoil,
                    'reload' => $this->ammo->cluster3_reload
                ]
            ],
            'recover' => [
                'recover_1' => [
                    'clip' => (int) $this->ammo->recover1_clip,
                    'rapid' => (int) $this->ammo->recover1_rapid,
                    'recoil' => (int) $this->ammo->recover1_recoil,
                    'reload' => $this->ammo->recover1_reload
                ],
                'recover_2' => [
                    'clip' => (int) $this->ammo->recover2_clip,
                    'rapid' => (int) $this->ammo->recover2_rapid,
                    'recoil' => (int) $this->ammo->recover2_recoil,
                    'reload' => $this->ammo->recover2_reload
                ]
            ],
            'poison' => [
                'poison_1' => [
                    'clip' => (int) $this->ammo->poison1_clip,
                    'rapid' => (int) $this->ammo->poison1_rapid,
                    'recoil' => (int) $this->ammo->poison1_recoil,
                    'reload' => $this->ammo->poison1_reload
                ],
                'poison_2' => [
                    'clip' => (int) $this->ammo->poison1_clip,
                    'rapid' => (int) $this->ammo->poison1_rapid,
                    'recoil' => (int) $this->ammo->poison1_recoil,
                    'reload' => $this->ammo->poison1_reload
                ]
            ],
            'paralysis' => [
                'paralysis_1' => [
                    'clip' => (int) $this->ammo->paralysis1_clip,
                    'rapid' => (int) $this->ammo->paralysis1_rapid,
                    'recoil' => (int) $this->ammo->paralysis1_recoil,
                    'reload' => $this->ammo->paralysis1_reload
                ],
                'paralysis_2' => [
                    'clip' => (int) $this->ammo->paralysis2_clip,
                    'rapid' => (int) $this->ammo->paralysis2_rapid,
                    'recoil' => (int) $this->ammo->paralysis2_recoil,
                    'reload' => $this->ammo->paralysis2_reload
                ]
            ],
            'sleep' => [
                'sleep_1' => [
                    'clip' => (int) $this->ammo->sleep1_clip,
                    'rapid' => (int) $this->ammo->sleep1_rapid,
                    'recoil' => (int) $this->ammo->sleep1_recoil,
                    'reload' => $this->ammo->sleep1_reload
                ],
                'sleep_2' => [
                    'clip' => (int) $this->ammo->sleep2_clip,
                    'rapid' => (int) $this->ammo->sleep2_rapid,
                    'recoil' => (int) $this->ammo->sleep2_recoil,
                    'reload' => $this->ammo->sleep2_reload
                ]
            ],
            'exhaust' => [
                'exhaust_1' => [
                    'clip' => (int) $this->ammo->exhaust1_clip,
                    'rapid' => (int) $this->ammo->exhaust1_rapid,
                    'recoil' => (int) $this->ammo->exhaust1_recoil,
                    'reload' => $this->ammo->exhaust1_reload
                ],
                'exhaust_2' => [
                    'clip' => (int) $this->ammo->exhaust2_clip,
                    'rapid' => (int) $this->ammo->exhaust2_rapid,
                    'recoil' => (int) $this->ammo->exhaust2_recoil,
                    'reload' => $this->ammo->exhaust2_reload
                ]
            ],
            'flaming' => [
                'clip' => (int) $this->ammo->flaming_clip,
                'rapid' => (int) $this->ammo->flaming_rapid,
                'recoil' => (int) $this->ammo->flaming_recoil,
                'reload' => $this->ammo->flaming_reload
            ],
            'water' => [
                'clip' => (int) $this->ammo->water_clip,
                'rapid' => (int) $this->ammo->water_rapid,
                'recoil' => (int) $this->ammo->water_recoil,
                'reload' => $this->ammo->water_reload
            ],
            'freeze' => [
                'clip' => (int) $this->ammo->freeze_clip,
                'rapid' => (int) $this->ammo->freeze_rapid,
                'recoil' => (int) $this->ammo->freeze_recoil,
                'reload' => $this->ammo->freeze_reload
            ],
            'thunder' => [
                'clip' => (int) $this->ammo->thunder_clip,
                'rapid' => (int) $this->ammo->thunder_rapid,
                'recoil' => (int) $this->ammo->thunder_recoil,
                'reload' => $this->ammo->thunder_reload
            ],
            'dragon' => [
                'clip' => (int) $this->ammo->dragon_clip,
                'rapid' => (int) $this->ammo->dragon_rapid,
                'recoil' => (int) $this->ammo->dragon_recoil,
                'reload' => $this->ammo->dragon_reload
            ],
            'slicing' => [
                'clip' => (int) $this->ammo->slicing_clip,
                'rapid' => (int) $this->ammo->slicing_rapid,
                'recoil' => (int) $this->ammo->slicing_recoil,
                'reload' => $this->ammo->slicing_reload
            ],
            'wyvern' => [
                'clip' => (int) $this->ammo->wyvern_clip,
                'reload' => $this->ammo->wyvern_reload
            ],
            'demon' => [
                'clip' => (int) $this->ammo->demon_clip,
                'recoil' => (int) $this->ammo->demon_recoil,
                'reload' => $this->ammo->demon_reload
            ],
            'armor' => [
                'clip' => (int) $this->ammo->armor_clip,
                'recoil' => (int) $this->ammo->armor_recoil,
                'reload' => $this->ammo->armor_reload
            ],
            'tranq' => [
                'clip' => (int) $this->ammo->tranq_clip,
                'recoil' => (int) $this->ammo->tranq_recoil,
                'reload' => $this->ammo->tranq_reload
            ]
        ];
    }
}
