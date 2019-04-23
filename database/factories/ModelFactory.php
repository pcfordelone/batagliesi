<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(FRD\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(FRD\Entities\BlogCategory::class, function (Faker\Generator $faker) {
    $name = $faker->word;
    return [
        'name' => $name,
        'slug' => $name,
        'status' => $faker->boolean(70),
        'description' => $faker->paragraph(1)
    ];
});

$factory->define(FRD\Entities\BlogPost::class, function (Faker\Generator $faker) {
    $name = $faker->word;
    return [
        'title' => $name,
        'slug' => $name,
        'status' => $faker->boolean(70),
        'featured' => $faker->boolean(70),
        'description' => $faker->paragraph(1),
        'html_content' => $faker->paragraphs(3, 1),
        'blog_category_id' => $faker->numberBetween(1, 2),
        'author' => 'Batagliesi Arquitetos + Designers'
    ];
});
