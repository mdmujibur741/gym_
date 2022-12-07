<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Lead;
use App\Models\Package;
use App\Models\Reminder;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        Lead::factory(20)->create();
        Reminder::factory(8)->create();
        Package::factory(3)->create();

      
    }
}
