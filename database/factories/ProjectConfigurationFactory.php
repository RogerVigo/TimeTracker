<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectConfigurationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $int = random_int(0, 1000);

        return [
            'name' => 'conf_' . $int,
            'value' => 'conf_' . $int,
        ];
    }
}
