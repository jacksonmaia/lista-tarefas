<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', ['tasks'=>$tasks]);
    }
    public function store(Request $request)
    {
        $taskData = $request->all();
        $this->task->create($taskData);
        return view('panel.cursos.create');


    }

    public function show($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function delete($id)
    {
        //
    }
}
