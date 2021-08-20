<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Astérix',
                'creation_year' => 1959,
                'bd' => 'Astérix le Gaulois',
                'drawer_id' => 1
            ],
            [
                'name' => 'Gaston Lagaffe',
                'creation_year' => 1957,
                'bd' => 'Gaston',
                'drawer_id' => 2
            ],
            [
                'name' => 'Fantasio',
                'creation_year' => 1938,
                'bd' => 'Spirou et Fantasio',
                'drawer_id' => 3
            ],
            [
                'name' => 'Spirou',
                'creation_year' => 1938,
                'bd' => 'Spirou et Fantasio',
                'drawer_id' => 2
            ],
            [
                'name' => 'Tintin',
                'creation_year' => 1929,
                'bd' => 'Les Aventures de Tintin',
                'drawer_id' => 5
            ]
        ]);
    }
}
