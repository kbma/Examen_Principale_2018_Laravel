<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        Factory('App\User',10)->create();
        Factory('App\Departement',3)->create();
       Factory('App\Computer',20)->create();
        Factory('App\ComputerUser',5)->create();
    }
}
