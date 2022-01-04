<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index()
    {
        $projects = resolve('projects');
        $tasks = Task::with('times')->take(1)->get();
        $nav = ["a", "b", "c"];
        $side = ["Section1", "Section2", "Section3"];

        return View('home/home')
            ->with("topBar", $nav)
            ->with("sideBar", $side)
            ->with("projects", $projects)
            ->with("tasks", $tasks);
    }
}
