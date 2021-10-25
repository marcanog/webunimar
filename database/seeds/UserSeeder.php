<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'created_at' => '2021-09-20 18:08:47',
            'updated_at' => '2021-09-20 18:08:47',
            'name' => 'Georgelys Marcano',
            'email' => 'georgelys.marcano@unimar.edu.ve',
            'password' => '$2y$10$BJeS.UG0pPvcH3YIpZ1ulunVyTPsCKZaCKYuD683WrsQTOoaCLzW2',
            'role' => 'Administrador',
            'status' => 'Activo',
        ]);
        DB::table('users')->insert([
            'created_at' => '2021-09-20 18:30:51',
            'updated_at' => '2021-09-20 18:30:51',
            'name' => 'Francisco Gomez',
            'email' => 'francisco.gomez@unimar.edu.ve',
            'password' => '$2y$10$i9qOub9xA7ku6QcUm9HgluHem3TwsZxSnFIDAXCz.whTg3lF50AXm',
            'role' => 'Contenido',
            'status' => 'Activo',
        ]);
    }
}
