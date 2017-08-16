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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Categoria::class, function(Faker\Generator $faker){
	return [
		'nombre' => $faker->words(4, true),
		'description' => $faker->realText(),
		/* Primer y Segundo parametro son ancho y alto.
		Se le puede poner un tercero que es la categoría de la imagen
		La imagen la agarra directamente del lorempixel.com*/
		'imagen' => $faker->imageUrl(100, 100)
	];
});

$factory->define(App\Producto::class, function(Faker\Generator $faker){
	return [
		'nombre' => $faker->words(2, true),
		'descripcion' => $faker->realText(),
		'precio' => $faker->numberBetween(100, 1000),
		'imagen' => $faker->imageUrl(100, 100),
		'categoria_id' => $faker->numberBetween(1, 200)
	];
});

$factory->define(App\Etiqueta::class, function(Faker\Generator $faker){
	return [
		'nombre' => $faker->unique()->word()
	];
});