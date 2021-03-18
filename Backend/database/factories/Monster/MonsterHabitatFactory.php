<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Monster\MonsterHabitat;
use Faker\Generator as Faker;

$factory->define(MonsterHabitat::class, static function (Faker $faker) {
    return [
		'monster_id' => $faker->numberBetween(1, 100),
		'location_id' => $faker->numberBetween(1, 100),
		'start_area' => $faker->text(),
		'move_area' => $faker->text(),
		'rest_area' => $faker->text(),
    ];
});
