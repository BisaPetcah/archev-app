<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::create([
            'name' => 'Web'
        ]);

        Division::create([
            'name' => 'Android'
        ]);

        Division::create([
            'name' => 'Game'
        ]);

        Division::create([
            'name' => 'Startup and Competition'
        ]);

        Division::create([
            'name' => 'UI/UX'
        ]);
    }
}
