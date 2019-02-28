<?php

use Illuminate\Database\Seeder;

class perfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('perfils')->insert([

           1 => ['nome' => 'Administrador'],
           2 => ['nome' => 'Participante'],
           3 => ['nome' => 'Gestor'],

          ]);
    }
}
