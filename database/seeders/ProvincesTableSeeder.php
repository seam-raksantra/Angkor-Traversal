<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province; // Import the Province model

class ProvincesTableSeeder extends Seeder
{
    public function run()
    {
        // List of provinces to insert
        $provinces = [
            'Phnom Penh', 'Siem Reap', 'Battambang', 'Kampong Cham', 'Kandal', 'Takeo', 
            'Kampong Speu', 'Kampot', 'Kep', 'Preah Sihanouk', 'Pursat', 'Prey Veng', 
            'Svay Rieng', 'Kampong Chhnang', 'Kampong Thom', 'Kampong Som', 'Oddar Meanchey', 
            'Preah Vihear', 'Stung Treng', 'Kratie', 'Mondulkiri', 'Ratanakiri', 'Koh Kong', 
            'Banteay Meanchey', 'Pailin'
        ];

        // Loop through each province and insert it if it doesn't exist already
        foreach ($provinces as $province) {
            Province::firstOrCreate(['name' => $province]);
        }
    }
}
