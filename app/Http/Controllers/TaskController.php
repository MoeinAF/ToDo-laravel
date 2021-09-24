<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;

class TaskController extends Controller
{
    public function create()
    {
        $users = User::all();
        return view('tasks.create')
            ->with('users', $users);
    }

    public function store(Request $request)
    {
        $tasks = Task::query()->create([
            "title" => $request->get('title', 'NO_TITLE'),
            "description" => $request->description,
            "user_id" => $request->get('user'),
            "is_done" => '1'
        ]);
        return redirect()->route('task.index')
            ->with('tasks', $tasks);
    }

    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
}
