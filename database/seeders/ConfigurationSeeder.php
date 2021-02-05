<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeder para crear los datos tabla configuration
        $arrays = range(0,25);
        foreach ($arrays as $valor) {
          DB::table('configurations')->insert([
              'language' => Str::random(15),
              'country' => Str::random(15),
              'state' => Str::random(15),
          ]);
    }
}
}