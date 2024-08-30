<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LaguDaerah;

class LaguDaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //jumlah data yang ditampilkan
        laguDaerah::factory()->count(10)->create();
    }
}
