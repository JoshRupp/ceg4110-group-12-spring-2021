<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Location\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, static function (Faker $faker) {
    return [
		'id' => $faker->numberBetween(1, 100),
		'order_id' => $faker->numberBetween(1, 100),
		'lang_id' => $faker->text(),
		'name' => $faker->text(),
    ];
});
