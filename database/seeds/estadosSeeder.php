<?php

use Illuminate\Database\Seeder;

class estadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([

            0 => ['nome' => 'AC'],
            1 => ['nome' => 'AL'],
            2 => ['nome' => 'AM'],
            3 => ['nome' => 'AP'],
            4 => ['nome' => 'BA'],
            5 => ['nome' => 'CE'],
            6 => ['nome' => 'DF'],
            7 => ['nome' => 'ES'],
            8 => ['nome' => 'GO'],
            9 => ['nome' => 'MA'],
            10 => ['nome' => 'MG'],
            11 => ['nome' => 'MS'],
            12 => ['nome' => 'MT'],
            13 => ['nome' => 'PA'],
            14 => ['nome' => 'PB'],
            15 => ['nome' => 'PE'],
            16 => ['nome' => 'PI'],
            17 => ['nome' => 'PR'],
            18 => ['nome' => 'RG'],
            19 => ['nome' => 'RN'],
            20 => ['nome' => 'RO'],
            21 => ['nome' => 'RR'],
            22 => ['nome' => 'RS'],
            23 => ['nome' => 'SC'],
            24 => ['nome' => 'SE'],
            25 => ['nome' => 'SP'],
            26 => ['nome' => 'TO']

        ]);
    }
}
