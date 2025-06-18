<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    public function run()
    {
        Hotel::create([
            'name' => 'Hotel Le Royal',
            'image' => 'Cooper/1_hotel.jpg',
            'description' => 'A timeless luxury hotel in Phnom Penh offering colonial charm with modern amenities.'
        ]);
        Hotel::create([
            'name' => 'The Square Hotel',
            'image' => 'Cooper/2_hotel.jpg',
            'description' => 'A stylish city-center hotel perfect for both business and leisure travelers.'
        ]);
        Hotel::create([
            'name' => 'Kampong Thom Royal Hotel',
            'image' => 'Cooper/3_hotel.jpg',
            'description' => 'A royal retreat in the heart of Kampong Thom, combining comfort and tradition.'
        ]);
        Hotel::create([
            'name' => 'LBN Asian Hotel',
            'image' => 'Cooper/4_hotel.jpg',
            'description' => 'Modern and elegant hotel near the Mekong River, ideal for business stays.'
        ]);
        Hotel::create([
            'name' => 'Ahliya Hotel',
            'image' => 'Cooper/5_hotel.JPEG',
            'description' => 'A budget-friendly hotel known for its hospitality and clean accommodations.'
        ]);
        Hotel::create([
            'name' => 'Seang Hai Resort',
            'image' => 'Cooper/6_hotel.jpg',
            'description' => 'A peaceful resort in nature, offering a quiet escape with lake views.'
        ]);
        Hotel::create([
            'name' => 'Palm River Hotel',
            'image' => 'Cooper/7_hotel.JPEG',
            'description' => 'Charming riverside hotel with spacious rooms and beautiful palm surroundings.'
        ]);
        Hotel::create([
            'name' => 'Vakara Hotel',
            'image' => 'Cooper/8_hotel.jpg',
            'description' => 'Luxury and culture blend perfectly at this top-rated hotel in Siem Reap.'
        ]);
        Hotel::create([
            'name' => 'Onsen Mori no Resort Hotel',
            'image' => 'Cooper/9_hotel.jpg',
            'description' => 'A Japanese-inspired resort featuring natural hot springs and forest tranquility.'
        ]);
        Hotel::create([
            'name' => 'Seam Reap Hotel',
            'image' => 'Cooper/10_hotel.webp',
            'description' => 'Located in the heart of Siem Reap, this hotel offers easy access to Angkor Wat.'
        ]);
        Hotel::create([
            'name' => 'Long Set Resort',
            'image' => 'Cooper/11_hotel.jpg',
            'description' => 'Beachfront resort offering breathtaking views and peaceful island vibes.'
        ]);
        Hotel::create([
            'name' => 'Sen Monorom Hotel',
            'image' => 'Cooper/12_hotel.jpg',
            'description' => 'Eco-friendly hotel located in the hills of Sen Monorom, surrounded by nature.'
        ]);
        Hotel::create([
            'name' => 'Ratanakiri Paradise Hotel & SPA2',
            'image' => 'Cooper/13_hotel.webp',
            'description' => 'An exotic getaway in Ratanakiri, offering spa services and lush landscapes.'
        ]);
        Hotel::create([
            'name' => 'Classy Hotel & Spa',
            'image' => 'Cooper/14_hotel.jpg',
            'description' => 'Classy hotel with spa and pool, located in the heart of Battambang city.'
        ]);
        Hotel::create([
            'name' => 'Preah Vihear Boutique Hotel',
            'image' => 'Cooper/15_hotel.jpg',
            'description' => 'A unique boutique stay near Preah Vihear, with traditional Khmer design.'
        ]);
        Hotel::create([
            'name' => 'Diamond Hotel',
            'image' => 'Cooper/16_hotel.webp',
            'description' => 'Elegant hotel in central Phnom Penh with modern rooms and local charm.'
        ]);
        Hotel::create([
            'name' => 'Pursat Riverside Hotel & Spa',
            'image' => 'Cooper/17_hotel.jpg',
            'description' => 'Luxurious riverside hotel offering fine dining and rejuvenating spa treatments.'
        ]);
        Hotel::create([
            'name' => 'Plantation Urban Resort',
            'image' => 'Cooper/18_hotel.webp',
            'description' => 'Urban resort in the city offering lush gardens, pools, and premium service.'
        ]);
        Hotel::create([
            'name' => 'Mekong Dolphin Hotel',
            'image' => 'Cooper/19_hotel.jpeg',
            'description' => 'Charming hotel in Kratie with dolphin tours and Mekong River views.'
        ]);
        Hotel::create([
            'name' => 'Soriyabori Villas Hotel',
            'image' => 'Cooper/20_hotel.jpg',
            'description' => 'Lakeside villas on a peaceful island, perfect for nature and culture lovers.'
        ]);
        Hotel::create([
            'name' => 'Pyramid Hotel & Spa',
            'image' => 'Cooper/21_hotel.jpg',
            'description' => 'Modern spa hotel offering luxurious relaxation and Khmer hospitality.'
        ]);
        Hotel::create([
            'name' => 'Cambana Poipet Hotel',
            'image' => 'Cooper/22_hotel.jpg',
            'description' => 'Contemporary hotel near the border, ideal for transit and business guests.'
        ]);
        Hotel::create([
            'name' => 'Golden River Hotel',
            'image' => 'Cooper/23_hotel.jpg',
            'description' => 'Chic riverside hotel with warm service and comfortable accommodations.'
        ]);
        Hotel::create([
            'name' => 'Royal Grown Hotel',
            'image' => 'Cooper/24_hotel.jpg',
            'description' => 'Upscale hotel known for its grand design and excellent service.'
        ]);
        Hotel::create([
            'name' => 'Phkar Chhouk Tep Hotel',
            'image' => 'Cooper/25_hotel.jpg',
            'description' => 'Affordable hotel with a convenient location and friendly atmosphere.'
        ]);
    }
}