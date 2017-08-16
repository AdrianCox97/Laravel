<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*times es las veces que lo va a repetir*/
        factory(App\Etiqueta::class)->times(75)->create();
    }
}