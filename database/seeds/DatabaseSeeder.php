<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatusSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(NewSeeder::class);

        $this->call(EmployeeSeeder::class);
        $this->call(EmployeeTypeSeeder::class);
    }
}
