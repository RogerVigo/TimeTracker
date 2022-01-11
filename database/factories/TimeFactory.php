<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

class TimeFactory extends Factory
{

    private $order;
    private $position;
    private $lastUsedTime;

    public function init($order){
        $this->order = $order;
        $this->position = 0;
        $this->lastUsedTime = time();
        return $this;
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $time = $this->lastUsedTime + random_int(1800, 28800);
        $this->lastUsedTime = $time;

        return [
            'type' => $this->order[$this->position][0],
            'action' => $this->order[$this->position++][1],
            'created_at' => $time
        ];
    }
}
