<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Car;
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
        // \App\Models\User::factory(10)->create();
            User::factory()->create([
                'name' => 'Anıl Özkan',
                'email' => 'an_lozkan7272@hotmail.com',
                'password' => '123',
                'phone' => '5454655910',
                'role' => 1
            ]);
        User::factory()->create([
            'name' => 'Hz. Ali',
            'email' => 'ali.erdogann21@gmail.com',
            'password' => '123',
            'phone' => '5454655911',
            'role' => 1
        ]);
        User::factory()->create([
            'name' => 'User',
            'email' => 'ali_ozkan_1907@hotmail.com',
            'password' => '123',
            'phone' => '5454655914',
            'role' => 0
        ]);
        Car::factory()->create([
            'name' => 'Porche',
            'serial_number' => '718',
            'segment' => 1,
            'price' => '2000000',
            'model' => '2021',
            'shifter' => 'otomatik',
            'fuel' => 'dizel',
            'speed' => '220kW/300ps',
            'rating' => 4,
            'thumbnail' => 'storage/thumbnails/vehicle-1.png'
        ]);
        Car::factory()->create([
            'name' => 'Mercedes',
            'serial_number' => 'c180',
            'segment' => 0,
            'price' => '1000000',
            'model' => '2021',
            'shifter' => 'otomatik',
            'fuel' => 'dizel',
            'speed' => '220kW/300ps',
            'rating' => 3,
            'thumbnail' => 'storage/thumbnails/car-1.png'
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
