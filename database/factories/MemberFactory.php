<?php

namespace Database\Factories;

use App\Models\Division;
use App\Models\Generation;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dataStatus = ['aktif', 'pasif'];
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'division_id' => mt_rand(1, Division::count()),
            'generation_id' => mt_rand(1, Generation::count()),
            'status' => $dataStatus[mt_rand(0, 1)],
        ];
    }
}
