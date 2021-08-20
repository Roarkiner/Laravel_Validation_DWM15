<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrawerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drawers')->insert([
            [
                'name' => 'Albert Uderzo',
                'birth_year' => 1927,
                'nationality' => 'Français'
            ],
            [
                'name' => 'André Franquin',
                'birth_year' => 1924,
                'nationality' => 'Belge'
            ],
            [
                'name' => 'Jijé',
                'birth_year' => 1914,
                'nationality' => 'Belge'
            ],
            [
                'name' => 'Maurice de Bevere',
                'birth_year' => 1923,
                'nationality' => 'Belge'
            ],
            [
                'name' => 'Hergé',
                'birth_year' => 1907,
                'nationality' => 'Belge'
            ]
        ]);
    }
}
