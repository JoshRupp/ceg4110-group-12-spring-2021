<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Monster\MonsterHitzoneText;
use Faker\Generator as Faker;

$factory->define(MonsterHitzoneText::class, static function (Faker $faker) {
    return [
		'id' => $faker->numberBetween(1, 100),
		'lang_id' => $faker->text(),
		'name' => $faker->text(),
    ];
});
