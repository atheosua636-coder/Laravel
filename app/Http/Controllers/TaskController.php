<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function today()
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('id')
            ->get();

        return view('tasks.today', compact('tasks'));
    }

    public function index()
    {
        $tasks = Task::orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('tasks.index', compact('tasks'));
    }
}
