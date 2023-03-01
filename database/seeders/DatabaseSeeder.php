<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Message;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Tag;
use App\Models\Testimonial;
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
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Hanifullah',
        //     'email' => 'hanifullah@gmail.com',
        // ]);

        // Message::factory(20)->create();
        // Service::factory(6)->create();
        // Setting::factory()->create();
        // Tag::factory(30)->create();
        // Testimonial::factory(3)->create();
        
    }
}
