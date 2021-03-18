<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Monster\MonsterBreakText;
use Faker\Generator as Faker;

$factory->define(MonsterBreakText::class, static function (Faker $faker) {
    return [
		'id' => $faker->numberBetween(1, 100),
		'lang_id' => $faker->text(),
		'part_name' => $faker->text(),
    ];
});
