<?php

namespace Database\Seeders;

use App\Models\Local;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Local::updateOrCreate([
          'name' => 'DGital'  
        ],[
            'name' => 'DGital',
            'address' => '23 Abn Matrouh,Egypt',
            'phone' => '+201001777794',
            'email' => 'info@Gital.com'
        ]);
    }
}
