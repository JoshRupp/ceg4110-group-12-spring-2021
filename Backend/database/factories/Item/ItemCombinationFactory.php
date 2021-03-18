<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Item\ItemCombination;
use Faker\Generator as Faker;

$factory->define(ItemCombination::class, static function (Faker $faker) {
    return [
		'result_id' => $faker->numberBetween(1, 100),
		'first_id' => $faker->numberBetween(1, 100),
		'second_id' => $faker->numberBetween(1, 100),
		'quantity' => $faker->numberBetween(1, 100),
    ];
});
