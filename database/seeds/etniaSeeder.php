<?php

use Illuminate\Database\Seeder;

class etniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('etnias')->insert([

            1 => ['nome' => 'Caucasiano'],
            2 => ['nome' => 'Pardo'],
            3 => ['nome' => 'Negro'],
            4 => ['nome' => 'Não Declarada'],

        ]);
    }
}
