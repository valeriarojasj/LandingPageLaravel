<?php

namespace Database\Seeders;
use App\Models\Candidate;
use App\Models\JobOpening;
use App\Models\Subscription;
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
        Candidate::factory(15000)->create();
        JobOpening::factory(100)->create();
        Subscription::factory(100)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CarouselSeeder::class);
    }
}