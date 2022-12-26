<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{User,Reminder,Provide,Package,Lead,Home,About, Contact, Footer};

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
        Package::factory(3)->create();
        Lead::factory(20)->create();
        Reminder::factory(8)->create();
        Home::factory(1)->create();
        Provide::factory(1)->create();
        About::factory(1)->create();
        Contact ::factory(25)->create();
        Footer ::factory(1)->create();
    }
}
