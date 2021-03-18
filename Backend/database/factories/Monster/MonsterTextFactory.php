<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Monster\MonsterText;
use Faker\Generator as Faker;

$factory->define(MonsterText::class, static function (Faker $faker) {
    return [
		'id' => $faker->numberBetween(1, 100),
		'lang_id' => $faker->text(),
		'name' => $faker->text(),
		'ecology' => $faker->text(),
		'description' => $faker->text(),
		'alt_state_description' => $faker->text(),
    ];
});
