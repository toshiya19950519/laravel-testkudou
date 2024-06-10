<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function detail(int $id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.detail', ['task' => $task]);
    }
}
