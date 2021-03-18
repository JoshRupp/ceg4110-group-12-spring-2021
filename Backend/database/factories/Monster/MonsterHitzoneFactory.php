<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Monster\MonsterHitzone;
use Faker\Generator as Faker;


$factory->define(MonsterHitzone::class, static function (Faker $faker) {
    return [
		'monster_id' => $faker->numberBetween(1, 100),
		'cut' => $faker->numberBetween(1, 100),
		'impact' => $faker->numberBetween(1, 100),
		'shot' => $faker->numberBetween(1, 100),
		'fire' => $faker->numberBetween(1, 100),
		'water' => $faker->numberBetween(1, 100),
		'ice' => $faker->numberBetween(1, 100),
		'thunder' => $faker->numberBetween(1, 100),
		'dragon' => $faker->numberBetween(1, 100),
		'ko' => $faker->numberBetween(1, 100),
    ];
});
