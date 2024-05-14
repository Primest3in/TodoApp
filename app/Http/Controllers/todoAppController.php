<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todoCreate;

class todoAppController extends Controller
{
    public function store(Request $request) {

        
        $todo = new todoCreate;

        $todo->task_name = $request['task-name'];
        
        $todo->due_date = $request['due-date'];

        $todo->due_time = $request['due-time'];

        $todo->save();

        return redirect(route("todo.welcome"));
        

    }

    public function update(Request $request) {
        
        $id = $request['Id'];

        $todo = todoCreate::find($id);

        $todo->task_name = $request['task-name'];

        $todo->due_date = $request['due-date'];

        $todo->due_time = $request['due-time'];

        $todo->save();

        return redirect(route("todo.welcome"));

    }

    public function Fetch_Tasks() {
        $All_tasks = todoCreate::all()->sortBy(function ($task) {
            return $task->due_date . ' ' . $task->due_time;
        });
        $data = compact('All_tasks');

        return view("welcome")->with($data);


        
    }

    public function Delete($id) {
        todoCreate::find($id) -> delete();

        return redirect(route("todo.welcome"));
        
    }
    public function Edit($id) {
        $todo_var = todoCreate::find($id);
        $data = compact('todo_var');
        return view("EditTodoItem")->with($data);
    }
    
    
}
