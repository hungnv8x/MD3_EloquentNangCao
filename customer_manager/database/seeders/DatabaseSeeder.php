<?php

namespace Database\Seeders;

use App\Models\User;
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
         User::factory(10)->create();
        $this->call(CitySeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(User_roleSeeder::class);
    }
}
