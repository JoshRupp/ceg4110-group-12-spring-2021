<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Monster\Monster;
use Faker\Generator as Faker;

$factory->define(Monster::class, static function (Faker $faker) {
    return [
		'order_id' => $faker->numberBetween(1, 100),
		'size' => $faker->text(),
		'icon' => $faker->text(),
		'pitfall_trap' => (int) $faker->boolean,
		'shock_trap' => (int) $faker->boolean,
		'vine_trap' => (int) $faker->boolean,
		'has_weakness' => (int) $faker->boolean,
		'has_alt_weakness' => (int) $faker->boolean,
		'weakness_fire' => $faker->numberBetween(1, 100),
		'weakness_water' => $faker->numberBetween(1, 100),
		'weakness_ice' => $faker->numberBetween(1, 100),
		'weakness_thunder' => $faker->numberBetween(1, 100),
		'weakness_dragon' => $faker->numberBetween(1, 100),
		'weakness_poison' => $faker->numberBetween(1, 100),
		'weakness_sleep' => $faker->numberBetween(1, 100),
		'weakness_paralysis' => $faker->numberBetween(1, 100),
		'weakness_blast' => $faker->numberBetween(1, 100),
		'weakness_stun' => $faker->numberBetween(1, 100),
		'alt_weakness_fire' => $faker->numberBetween(1, 100),
		'alt_weakness_water' => $faker->numberBetween(1, 100),
		'alt_weakness_ice' => $faker->numberBetween(1, 100),
		'alt_weakness_thunder' => $faker->numberBetween(1, 100),
		'alt_weakness_dragon' => $faker->numberBetween(1, 100),
		'alt_weakness_poison' => $faker->numberBetween(1, 100),
		'alt_weakness_sleep' => $faker->numberBetween(1, 100),
		'alt_weakness_paralysis' => $faker->numberBetween(1, 100),
		'alt_weakness_blast' => $faker->numberBetween(1, 100),
		'alt_weakness_stun' => $faker->numberBetween(1, 100),
		'ailment_roar' => $faker->text(),
		'ailment_wind' => $faker->text(),
		'ailment_tremor' => $faker->text(),
		'ailment_defensedown' => (int) $faker->boolean,
		'ailment_fireblight' => (int) $faker->boolean,
		'ailment_waterblight' => (int) $faker->boolean,
		'ailment_thunderblight' => (int) $faker->boolean,
		'ailment_iceblight' => (int) $faker->boolean,
		'ailment_dragonblight' => (int) $faker->boolean,
		'ailment_blastblight' => (int) $faker->boolean,
		'ailment_regional' => (int) $faker->boolean,
		'ailment_poison' => (int) $faker->boolean,
		'ailment_sleep' => (int) $faker->boolean,
		'ailment_paralysis' => (int) $faker->boolean,
		'ailment_bleed' => (int) $faker->boolean,
		'ailment_stun' => (int) $faker->boolean,
		'ailment_mud' => (int) $faker->boolean,
		'ailment_effluvia' => (int) $faker->boolean,
    ];
});
