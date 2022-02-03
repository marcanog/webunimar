<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'title' => 'Evento 1',
            'description' => 'Descripción del evento 1',
            'color' => 'rgb(60, 141, 188)',
            'start' => date("Y")."-".date("m").'-01',
            'end' => date("Y")."-".date("m").'-01',
            'tags_id' => '1,2,3,4',
            'status_id' => '1',
        ]);
        DB::table('events')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'title' => 'Evento 2',
            'description' => 'Descripción del evento 2',
            'color' => 'rgb(186, 139, 0)',
            'start' => date("Y")."-".date("m").'-10',
            'end' => date("Y")."-".date("m").'-18',
            'tags_id' => '2,4',
            'status_id' => '1',
        ]);
        DB::table('events')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'title' => 'Evento 3',
            'description' => 'Descripción del evento 3',
            'color' => 'rgb(111, 66, 193)',
            'start' => date("Y")."-".date("m").'-09 09:30:00.000Z',
            'end' => date("Y")."-".date("m").'-10 12:00:00.000Z',
            'tags_id' => '1,5,6',
            'status_id' => '1',
        ]);
        DB::table('events')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'title' => 'Evento 4',
            'description' => 'Descripción del evento 4',
            'color' => 'rgb(167, 29, 42)',
            'start' => date("Y")."-".date("m").'-13 11:30:00.000Z',
            'end' => date("Y")."-".date("m").'-13 16:30:00.000Z',
            'tags_id' => '1,2,6',
            'status_id' => '1',
        ]);
    }
}
