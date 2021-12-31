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
            'name' => 'Web',
            'slug' => 'web',
            'icon_name' => 'web.svg',
        ]);

        Division::create([
            'name' => 'Android',
            'slug' => 'android',
            'icon_name' => 'android.svg'
        ]);

        Division::create([
            'name' => 'Game',
            'slug' => 'game',
            'icon_name' => 'game.svg'
        ]);

        Division::create([
            'name' => 'Startup and Competition',
            'slug' => 'startup-and-competition',
            'icon_name' => 'startup.svg'
        ]);

        Division::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux',
            'icon_name' => 'uiux.svg'
        ]);
    }
}
