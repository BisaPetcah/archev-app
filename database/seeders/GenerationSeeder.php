<?php

namespace Database\Seeders;

use App\Models\Generation;
use Illuminate\Database\Seeder;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Generation::create([
            'name' => '2018'
        ]);

        Generation::create([
            'name' => '2019'
        ]);

        Generation::create([
            'name' => '2020'
        ]);

        Generation::create([
            'name' => '2021'
        ]);
    }
}
