<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Item\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, static function (Faker $faker) {
    return [
		'category' => $faker->text(),
		'subcategory' => $faker->text(),
		'rarity' => $faker->numberBetween(1, 100),
		'buy_price' => $faker->numberBetween(1, 100),
		'sell_price' => $faker->numberBetween(1, 100),
		'carry_limit' => $faker->numberBetween(1, 100),
		'points' => $faker->numberBetween(1, 100),
		'icon_name' => $faker->text(),
		'icon_color' => $faker->text(),
    ];
});
