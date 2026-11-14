<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', ['tasks' => Task::latest()->get()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate(['title' => ['required', 'string', 'max:120']]);
        Task::create($data);
        return redirect()->route('tasks.index');
    }

    public function update(Request $request, Task $task)
    {
        $data = $request->validate(['completed' => ['required', 'boolean']]);
        $task->update($data);
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}