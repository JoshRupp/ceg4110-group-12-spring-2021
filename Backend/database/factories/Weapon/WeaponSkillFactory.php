<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Skill\Skilltree;
use App\Models\Weapon\Weapon;
use App\Models\Weapon\WeaponSkill;
use Faker\Generator as Faker;

$factory->define(WeaponSkill::class, static function (Faker $faker) {
    return [
		'weapon_id' => static function () {
            return factory(Weapon::class)->create()->id;
        },
		'skilltree_id' => static function () {
            return factory(Skilltree::class)->create()->id;
        },
		'level' => $faker->numberBetween(1, 3),
    ];
});
