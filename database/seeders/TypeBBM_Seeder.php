<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeBBM_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Pertalite'
        ]);
        Type::create([
            'name' => 'Pertamax'
        ]);
        Type::create([
            'name' => 'Pertamax Turbo'
        ]);
        Type::create([
            'name' => 'Solar'
        ]);
        Type::create([
            'name' => 'Bio Solar'
        ]);
    }
}
