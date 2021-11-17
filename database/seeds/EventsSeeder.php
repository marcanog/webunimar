<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Events')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'title' => 'Evento 1',
            'description' => 'Descripción del evento 1',
            'color' => 'rgb(60, 141, 188)',
            'start' => '2021-11-01',
            'end' => '2021-11-01',
            'status_id' => '1',
        ]);
        DB::table('Events')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'title' => 'Evento 2',
            'description' => 'Descripción del evento 2',
            'color' => 'rgb(186, 139, 0)',
            'start' => '2021-11-10',
            'end' => '2021-11-18',
            'status_id' => '1',
        ]);
        DB::table('Events')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'title' => 'Evento 3',
            'description' => 'Descripción del evento 3',
            'color' => 'rgb(111, 66, 193)',
            'start' => '2021-11-09 09:30:00.000Z',
            'end' => '2021-11-10 12:00:00.000Z',
            'status_id' => '1',
        ]);
        DB::table('Events')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'title' => 'Evento 4',
            'description' => 'Descripción del evento 4',
            'color' => 'rgb(167, 29, 42)',
            'start' => '2021-11-13 11:30:00.000Z',
            'end' => '2021-11-13 16:30:00.000Z',
            'status_id' => '1',
        ]);
    }
}
