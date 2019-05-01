<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
      'name' => $name = $faker->company,
      'slug' => str_slug($name),
      'email' => $faker->unique()->companyEmail,
      // 'file' => $faker->imageUrl(100, 100),
      'website' => $faker->url
    ];
});
