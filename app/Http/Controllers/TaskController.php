<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\User;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();
        return view('admin.tasks.list', ['tasks'=>$tasks]);
    }
    public function create()
    {
        $users = User::all();
        return view('admin.tasks.register' , ['users'=>$users]);
    }
    public function store(Request $request)
    {
        $task = new Task();
        $task->create($request->all());
        return redirect()->route('admin.tasks.list');
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $tasks = Task::find($id);
        return view('admin.tasks.register',['tasks' => $tasks]);
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
