<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Webinar>
 */
class WebinarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'instansi' => $this->faker->company(),
            'biodata' => $this->faker->sentence(),
            'tgl_lahir' => $this->faker->date('Y-m-d', 'now')
        ];
    }
}
