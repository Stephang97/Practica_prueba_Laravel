<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\People;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeder para crear los datos tabla people
        $arrays = range(0,20);
        foreach ($arrays as $valor) {
          DB::table('people')->insert([
              'nameUser' => Str::random(20),
              'nameFull' => Str::random(20),
              'email' => Str::random(20),
              'cellphone' => Str::random(15),
              'age' => rand(1, 99),
              'dateBorn' => Str::random(20),

          ]);
    }
}
}