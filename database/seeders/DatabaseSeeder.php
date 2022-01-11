<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $timesOrder = [
            ["NORMAL","START"],
            ["BREAK", "START"],
            ["BREAK", "STOP"],
            ["LUNCH", "START"],
            ["LUNCH", "STOP"],
            ["BREAK", "START"],
            ["BREAK", "STOP"],
            ["NORMAL", "STOP"]
        ];
        $projects = Models\Project::factory(3)->create();

        foreach($projects as $project){
            $tasks = $project->tasks()->saveMany(Models\Task::factory(5)->make());

            foreach($tasks as $task){
                $task->times()->saveMany(Models\Time::factory(count($timesOrder))->init($timesOrder)->make());
            }
            $project->configurations()->saveMany(Models\ProjectConfiguration::factory(4)->make());
        }
        $uncompletedOrder = array_slice($timesOrder,0, 4);
        Models\Task::find(1)->times()->saveMany(Models\Time::factory(count($uncompletedOrder))->init($uncompletedOrder)->make());
        Models\Configuration::factory(4)->create();

    }
}
