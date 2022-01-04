<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = ['NORMAL', 'BREAK', 'LUNCH'];
        $action = ['START', 'STOP'];

        return [
            'type' => $type[random_int(0,2)],
            'action' => $action[random_int(0,1)],
            'created_at' => now()
        ];
    }
}
