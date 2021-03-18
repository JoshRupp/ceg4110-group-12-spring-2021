<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Monster\MonsterReward;
use Faker\Generator as Faker;

$factory->define(MonsterReward::class, static function (Faker$faker) {
    return [
		'monster_id' => $faker->numberBetween(1, 100),
		'condition_id' => $faker->numberBetween(1, 100),
		'rank' => $faker->text(),
		'item_id' => $faker->numberBetween(1, 100),
		'stack' => $faker->numberBetween(1, 100),
		'percentage' => $faker->numberBetween(1, 100),
    ];
});
