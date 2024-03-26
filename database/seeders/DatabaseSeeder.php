<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Counters;
use App\Models\Local;
use App\Models\Message;
use App\Models\Service;
use App\Models\Subscriber;
use Illuminate\Database\Seeder;
use SebastianBergmann\LinesOfCode\Counter;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::truncate();

        Category::factory(10)->create();

        // Message::truncate();

        // Message::factory(5)->create();

        // Service::truncate();
        // Service::factory(6)->create();
        //Subscriber::factory(10)->create();


        // counters::truncate();

        // $years = counters::factory()->create([
        //     'name' => 'Years Experience',
        //     'count' => 1234,
        //     'icon' => 'fa-certificate'
        // ]);

        // $Team_Members = Counters::factory()->create([
        //     'name' =>'Team Members',
        //     'count' => 1234,
        //     'icon' => 'fa-users-cog'
        // ]);
        
        // $this->call([
        //     AdminSeeder::class,
        //     LocalSeeder::class,
        //     SkillsSeeder::class,
        // ]);
    }
}
