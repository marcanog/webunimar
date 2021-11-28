<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'name' => 'Jhon Smith',
            'email' => 'jsmith@unimar.edu.ve',
            'job' => 'Coordinador',
            'organization'=> 'Universidad de Margarita',
            'birthday' => '1992-12-24',
            'password' => '$2y$10$i9qOub9xA7ku6QcUm9HgluHem3TwsZxSnFIDAXCz.whTg3lF50AXm',
            'salary' => '100.00',
            'SSO' => '5.00',
            'LPH' => '2.00',
            'IVSS' => '2.00',
            'status_id' => '1',
            //'employeestypes_id' => '2',
        ]);
    }
}
