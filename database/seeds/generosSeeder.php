<?php

use Illuminate\Database\Seeder;

class generosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('generos')->insert([

            1 => ['nome' => 'Masculino'],
            2 => ['nome' => 'Feminino'],
            3 => ['nome' => 'Indefinido'],

        ]);
    }
}
