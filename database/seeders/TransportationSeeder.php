<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transportation;

class TransportationSeeder extends Seeder
{
    public function run()
    {
        Transportation::create([
            'name' => 'Bus',
            'image' => 'Cooper/bus.jpg',
            'description' => 'Affordable and convenient public transportation ideal for group travel between cities.'
        ]);

        Transportation::create([
            'name' => 'Car',
            'image' => 'Cooper/car.png',
            'description' => 'Comfortable private vehicle perfect for short or long-distance travel within Cambodia.'
        ]);

        Transportation::create([
            'name' => 'VIP Car',
            'image' => 'Cooper/VIP_car.jpg',
            'description' => 'Premium transport with extra space, air-conditioning, and personal service for high-end trips.'
        ]);

        Transportation::create([
            'name' => 'Private Car',
            'image' => 'Cooper/private_car.jpg',
            'description' => 'Exclusive vehicle rental with driver for flexible travel and full privacy.'
        ]);
    }
}
