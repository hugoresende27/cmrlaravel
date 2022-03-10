<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UpcommingSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UpcommingSeeder::class,
            TodaySeeder::class,
        ]) ;
        // \App\Models\User::factory(10)->create();
    }
}
