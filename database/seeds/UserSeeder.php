<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Georgelys Marcano',
            'email' => 'georgelys.marcano@unimar.edu.ve',
            'password' => '$2y$10$BJeS.UG0pPvcH3YIpZ1ulunVyTPsCKZaCKYuD683WrsQTOoaCLzW2',
            'role_id' => '1',
            'status_id' => '1',
        ]);
        DB::table('users')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Francisco Gomez',
            'email' => 'francisco.gomez@unimar.edu.ve',
            'password' => '$2y$10$i9qOub9xA7ku6QcUm9HgluHem3TwsZxSnFIDAXCz.whTg3lF50AXm',
            'role_id' => '2',
            'status_id' => '2',
        ]);
    }
}
