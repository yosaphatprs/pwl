<?php

namespace Database\Seeders;

use App\Models\Hobby;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        Hobby::factory()->count(10)->create();
=======
        Hobby::Factory()->count(2)->create();
>>>>>>> c1d21601dda88c0b870af0f59a4105e49cbf11a5
    }
}