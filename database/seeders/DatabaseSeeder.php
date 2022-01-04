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
        $projects = Models\Project::factory(3)->create();

        foreach($projects as $project){
            $tasks = $project->tasks()->saveMany(Models\Task::factory(5)->make());

            foreach($tasks as $task){
                $task->times()->saveMany(Models\Time::factory(10)->make());
            }
            $project->configurations()->saveMany(Models\ProjectConfiguration::factory(4)->make());
        }

        Models\Configuration::factory(4)->create();

    }
}
