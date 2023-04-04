<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

// use App\Models\Reservation;

use App\Models\Reservation;
use App\Models\User;
use Database\Factories\ReservationFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            CarSeeder::class,
            // ReservationSeeder::class,
            
        ]);

        // factory(App\User::class, 3)->create();
        // factory(App\Car::class, 3)->create();
        // factory(App\Reservation::class, 3)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
