<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Skill\Skilltree;
use Faker\Generator as Faker;

$factory->define(Skilltree::class, static function (Faker $faker) {
    return [
		'max_level' => $faker->numberBetween(1, 7),
		'icon_color' => $faker->colorName,
		'secret' => $faker->numberBetween(0, 2),
		'unlocks_id' => $faker->numberBetween(1, 100),
    ];
});
