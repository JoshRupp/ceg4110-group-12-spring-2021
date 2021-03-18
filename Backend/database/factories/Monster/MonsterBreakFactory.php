<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Monster\MonsterBreak;
use Faker\Generator as Faker;


$factory->define(MonsterBreak::class, static function (Faker $faker) {
    return [
		'monster_id' => $faker->numberBetween(1, 100),
		'flinch' => $faker->numberBetween(1, 100),
		'wound' => $faker->numberBetween(1, 100),
		'sever' => $faker->numberBetween(1, 100),
		'extract' => $faker->text(),
    ];
});
