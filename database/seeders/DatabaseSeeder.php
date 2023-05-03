<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        //\App\Models\User::factory(20)->create();
        \DB::unprepared(file_get_contents('./seed.sql'));
        //\DB::unprepared(file_get_contents(database_path('./../seed.sql')));
        //\App\Models\User::factory(20)->create();
        //\App\Models\Bookings::factory(20)->create();
        //\App\Models\Rooms::factory(20)->create();
        //\App\Models\Contact::factory(20)->create();
    }
}
