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
            'name' => 'Master',
            'email' => 'master@email.com',
            'birth'=> '2021-12-09',
            'phone' => '04121234567',
            'password' => '$2y$10$BJeS.UG0pPvcH3YIpZ1ulunVyTPsCKZaCKYuD683WrsQTOoaCLzW2',
            'role_id' => '2',
            'status_id' => '1',
        ]);
        DB::table('users')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Georgelys Marcano',
            'email' => 'georgelys.marcano@unimar.edu.ve',
            'birth'=> '1992-03-15',
            'phone' => '04127957268',
            'password' => '$2y$10$BJeS.UG0pPvcH3YIpZ1ulunVyTPsCKZaCKYuD683WrsQTOoaCLzW2',
            'role_id' => '2',
            'status_id' => '1',
        ]);
        DB::table('users')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Francisco Gomez',
            'email' => 'francisco.gomez@unimar.edu.ve',
            'birth'=> '1992-03-15',
            'phone' => '04127957268',
            'password' => '$2y$10$BJeS.UG0pPvcH3YIpZ1ulunVyTPsCKZaCKYuD683WrsQTOoaCLzW2',
            'role_id' => '1',
            'status_id' => '1',
        ]);
        DB::table('users')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Silvestre Cardenas',
            'email' => 'scardenas@unimar.edu.ve',
            'birth'=> '1992-03-15',
            'phone' => '04127957268',
            'password' => '$2y$10$BJeS.UG0pPvcH3YIpZ1ulunVyTPsCKZaCKYuD683WrsQTOoaCLzW2',
            'role_id' => '3',
            'status_id' => '1',
        ]);
        DB::table('users')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'José Perez',
            'email' => 'jperez@unimar.edu.ve',
            'birth'=> '1992-03-15',
            'phone' => '04127957268',
            'password' => '$2y$10$BJeS.UG0pPvcH3YIpZ1ulunVyTPsCKZaCKYuD683WrsQTOoaCLzW2',
            'role_id' => '4',
            'status_id' => '1',
        ]);
        DB::table('users')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Rae Gonzalez',
            'email' => 'rgonzalez@unimar.edu.ve',
            'birth'=> '1992-03-15',
            'phone' => '04127957268',
            'password' => '$2y$10$BJeS.UG0pPvcH3YIpZ1ulunVyTPsCKZaCKYuD683WrsQTOoaCLzW2',
            'role_id' => '5',
            'status_id' => '1',
        ]);
    }
}
