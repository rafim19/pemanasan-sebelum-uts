<?php

namespace Database\Factories;

use App\Models\Major;
use App\Models\Ortu;
use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'dob' => $this->faker->date(),
            'bio' => $this->faker->text(),
            'email' => $this->faker->unique()->safeEmail(),
            'major_id' => $this->faker->numberBetween(1, Major::count()),
            'ortu_id' => $this->faker->numberBetween(1, Ortu::count()),
        ];
    }
}
