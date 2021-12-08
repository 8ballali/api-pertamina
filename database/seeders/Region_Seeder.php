<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class Region_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create([
            'name' => 'Jawa Tengah - Semarang'
        ]);
        Region::create([
            'name' => 'Jawa Tengah - Kudus'
        ]);
        Region::create([
            'name' => 'Jawa Barat - Bandung'
        ]);
        Region::create([
            'name' => 'Jawa Barat - Bogor'
        ]);
        Region::create([
            'name' => 'Jawa Timur - Surabaya'
        ]);
        Region::create([
            'name' => 'Jawa Timur - Probolinggo'
        ]);
    }
}
