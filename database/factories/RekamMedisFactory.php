<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RekamMedis>
 */
class RekamMedisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dokter_id' => mt_rand(1,3),
            'pasien_id' => mt_rand(1,3),
            'status' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'suhu' => (mt_rand(350, 455))/10
        ];
    }
}
