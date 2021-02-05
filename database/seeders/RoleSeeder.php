<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeder para crear lo datos tabla role
        $arrays = range(0,25);
        foreach ($arrays as $valor) {
          DB::table('roles')->insert([
              'description' => Str::random(50),
          ]);
    }
}
}