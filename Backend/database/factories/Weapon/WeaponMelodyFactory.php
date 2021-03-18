<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Weapon\WeaponMelody;
use Faker\Generator as Faker;

$factory->define(WeaponMelody::class, static function (Faker $faker) {
    return [
		'base_duration' => $faker->numberBetween(1, 100),
		'base_extension' => $faker->numberBetween(1, 100),
		'm1_duration' => $faker->numberBetween(1, 100),
		'm1_extension' => $faker->numberBetween(1, 100),
		'm2_duration' => $faker->numberBetween(1, 100),
		'm2_extension' => $faker->numberBetween(1, 100),
    ];
});
