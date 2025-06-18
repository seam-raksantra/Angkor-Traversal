<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guider;

class GuiderSeeder extends Seeder
{
    public function run()
    {
        Guider::create([
            'name' => 'Seam Raksantra',
            'image' => 'Cooper/san.jpg',
            'description' => 'Experienced tour guide specializing in Angkor Wat and Cambodian history, fluent in English and Khmer.'
        ]);

        Guider::create([
            'name' => 'Nhe Sokraksa',
            'image' => 'Cooper/raksa.jpg',
            'description' => 'Energetic guide with deep knowledge of local culture and over a decade of guiding experience.'
        ]);

        Guider::create([
            'name' => 'Ngin Malyny',
            'image' => 'Cooper/lyny.jpg',
            'description' => 'Warm and approachable guide skilled in historical storytelling and eco-tourism adventures.'
        ]);

        Guider::create([
            'name' => 'Chheng Sreydav',
            'image' => 'Cooper/dav.jpg',
            'description' => 'Highly recommended female tour guide with strong communication skills and a passion for Cambodian heritage.'
        ]);
    }
}