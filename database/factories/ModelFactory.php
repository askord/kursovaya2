<?php
$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(),
        'image' => 'http://loremflickr.com/400/300?random='.rand(1, 100),
        'price' => $faker->numberBetween(3, 100),
        'description' => $faker->paragraph(2)
    ];
});