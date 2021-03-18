<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Weapon\Weapon;
use App\Models\Weapon\WeaponText;
use Faker\Generator as Faker;

$factory->define(WeaponText::class, static function (Faker $faker) {
    return [
        'id' => static function () {
            return factory(Weapon::class)->create()->id;
        },
        'lang_id' => $faker->languageCode,
        'name' => $faker->randomElement(['Defender Great Sword I', 'Defender Great Sword II', 'Defender Great Sword III'])
    ];
});
