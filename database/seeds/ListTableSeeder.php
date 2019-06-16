<?php

use Illuminate\Database\Seeder;

class ListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lists')->insert([
            'raison_sociale' => 'Company1',
            'code_postal' => '10000',
            'region' => 0
        ]);

        DB::table('lists')->insert([
            'raison_sociale' => 'Company2',
            'code_postal' => '20000',
            'region' => 0
        ]);

        DB::table('lists')->insert([
            'raison_sociale' => 'Company3',
            'code_postal' => '30000',
            'region' => 1
        ]);

        DB::table('lists')->insert([
            'raison_sociale' => 'Company4',
            'code_postal' => '40000',
            'region' => 2
        ]);
    }
}
