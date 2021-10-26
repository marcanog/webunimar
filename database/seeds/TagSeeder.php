<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'tag' => 'Prensa Unimar',
        ]);
        DB::table('tags')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'tag' => 'Rectorado',
        ]);
        DB::table('tags')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'tag' => 'Vicerrectorado Académico',
        ]);
        DB::table('tags')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'tag' => 'Vicerrectorado de Extensión',
        ]);
    }
}
