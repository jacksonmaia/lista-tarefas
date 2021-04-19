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
        $task = Task::create( $request->all() );
        return redirect()->route('tasks.list');

    }
    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('tasks.list');
    }

}
