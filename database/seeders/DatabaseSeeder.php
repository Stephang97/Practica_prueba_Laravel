<?php

namespace Database\Seeders;

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
        //llamadas a cada seeder 
        $this->call(PeopleSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(configurationSeeder::class);
    }

    
}
