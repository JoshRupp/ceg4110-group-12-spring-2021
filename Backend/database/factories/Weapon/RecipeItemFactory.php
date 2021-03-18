<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Weapon\RecipeItem;
use Faker\Generator as Faker;

$factory->define(RecipeItem::class, static function (Faker $faker) {
    return [
		'recipe_id' => $faker->numberBetween(1, 100),
		'item_id' => $faker->numberBetween(1, 100),
		'quantity' => $faker->numberBetween(1, 100),
    ];
});
