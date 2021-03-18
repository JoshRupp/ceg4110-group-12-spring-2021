<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Weapon\Weapon;
use App\Models\Weapon\WeaponAmmo;
use Faker\Generator as Faker;

$factory->define(Weapon::class, static function (Faker $faker) {
    $weapon_type = $faker->randomElement([
        'great-sword',
        'long-sword',
        'sword-and-shield',
        'dual-blades',
        'hammer',
        'hunting-horn',
        'lance',
        'gunlance',
        'switch-axe',
        'charge-blade',
        'insect-glaive',
        'light-bowgun',
        'heavy-bowgun',
        'bow'
    ]);

    $element1 =  $faker->randomElement([
        null,
        'Poison',
        'Dragon',
        'Thunder',
        'Ice',
        'Water',
        'Paralysis',
        'Fire',
        'Sleep',
        'Blast',
    ]);

    $element2 =  $faker->randomElement([
        null,
        'Poison',
        'Dragon',
        'Thunder',
        'Ice',
        'Water',
        'Paralysis',
        'Fire',
        'Sleep',
        'Blast',
    ]);

    $sharpness = [];

    for ($i = 0; $i < 7; $i++) {
        $sharpness[] = $faker->numberBetween(0, 24) * 10;
    }

    $sharpnessString = implode(',', $sharpness);

    return [
		'order_id' => $faker->numberBetween(1, 4000),
		'weapon_type' => $weapon_type,
		'rarity' => $faker->numberBetween(1, 12),
		'category' => $faker->randomElement([null, 'Safi', 'Kulve']),
        'previous_weapon_id' => null,
        'create_recipe_id' => null,
        'upgrade_recipe_id' => null,
		'attack' => $faker->numberBetween(1, 2000),
		'attack_true' => $faker->numberBetween(1, 500),
		'affinity' => $faker->numberBetween(1, 100),
		'defense' => $faker->numberBetween(1, 100),
		'slot_1' => $faker->numberBetween(1, 3),
		'slot_2' => $faker->numberBetween(1, 3),
		'slot_3' => $faker->numberBetween(1, 3),
		'element1' => $element1,
		'element1_attack' => ($element1 !== null) ? $faker->numberBetween(1, 100) : null,
		'element2' => $element2,
		'element2_attack' => ($element2 !== null) ? $faker->numberBetween(1, 100) : null,
		'element_hidden' => (int) $faker->boolean,
		'elderseal' => $faker->randomElement([
		    null,
            'high',
            'average',
            'low'
        ]),
		'sharpness' => $sharpnessString,
		'sharpness_maxed' => (int) $faker->boolean,
		'craftable' => (int) $faker->boolean,
		'final' => (int) $faker->boolean,
		'kinsect_bonus' => null,
		'phial' => null,
		'phial_power' => null,
		'shelling' => null,
		'shelling_level' => null,
		'notes' => null,
		'coating_close' => null,
		'coating_power' => null,
		'coating_paralysis' => null,
		'coating_poison' => null,
		'coating_sleep' => null,
		'coating_blast' => null,
		'ammo_id' => null,
    ];
})->afterCreating(Weapon::class, static function (Weapon $weapon, Faker $faker) {
    $weaponType = $weapon->weapon_type;

    if ($weaponType === 'insect-glaive') {
        $weapon->kinsect_bonus = $faker->randomElement([
            'sever',
            'speed',
            'element',
            'health',
            'stamina',
            'blunt',
            'spirit_strength',
            'stamina_health',
        ]);
    }

    if ($weaponType === 'charge-blade') {
        $weapon->phial = $faker->randomElement([
            'power',
            'poison',
            'power element',
            'exhaust',
            'dragon',
            'paralysis',
            'impact'
        ]);

        $weapon->phial_power = $faker->numberBetween(10, 48) * 10;
    }

    if ($weaponType === 'gunlance') {
        $weapon->shelling = $faker->randomElement([
            'normal',
            'wide',
            'long'
        ]);

        $weapon->shelling_level = $faker->numberBetween(1, 7);
    }

    if ($weaponType === 'hunting-horn') {
        // TODO: Add random note generation
        $weapon->notes = 'WRB';
    }

    if ($weaponType === 'bow') {
        $weapon->coating_close =(int) $faker->boolean();
		$weapon->coating_power =(int) $faker->boolean();
		$weapon->coating_paralysis =(int) $faker->boolean();
		$weapon->coating_poison =(int) $faker->boolean();
		$weapon->coating_sleep =(int) $faker->boolean();
		$weapon->coating_blast =(int) $faker->boolean();
    }

    if ($weaponType === 'heavy-bowgun' || $weaponType === 'light-bowgun') {
        $weapon->ammo_id = factory(WeaponAmmo::class)->create()->id;
        $weapon->sharpness = null;
        $weapon->sharpness_maxed = null;
    }

    if ($weapon->element1 !== null) {
        $weapon->element1_attack = $faker->numberBetween(1, 100);
    }

    if ($weapon->element2 !== null) {
        $weapon->element2_attack = $faker->numberBetween(1, 100);
    }

    $weapon->save();
});

