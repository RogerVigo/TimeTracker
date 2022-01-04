<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConfigurationFactory extends Factory
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
            'name' => 'conf_' . strval($int),
            'value' => 'conf_' . strval($int),
        ];
    }
}
