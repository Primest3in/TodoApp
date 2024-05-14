
@extends('main')

@section('main-section')



<div class="container">

        <div class="row pt-4 pb-3" >
            <div class="col-6"> 
                <h2 class="text-primary"> Edit ToDo Item </h2>
            </div>
            <div class="col-6 text-end"> 
                <a href="{{route("todo.welcome")}}" class="btn btn-secondary">
                    Back
                </a>
            </div>
        </div>



        <div class = "card">
            <div class = "card-body"> 
                <form method = "POST" action = "{{ route('todo.update') }}"> 
                    @csrf
                    <label for = "" class = "form-label mt-4"> Edit Task </label> 
                    <input type="text" name = "task-name" class = "form-control" value="{{ $todo_var->task_name }}"> </input>

                    <label for = "" class = "form-label mt-4"> Edit Due Date </label> 
                    <input type="date" name = "due-date" class = "form-control" value="{{ $todo_var->due_date }}"> </input>

                    <label for = "" class = "form-label mt-4"> Edit Due Time </label> 
                    <input type="time" name = "due-time" class = "form-control" value="{{ $todo_var->due_time }}"> </input>

                    <input type = "hidden" name = "Id" value = "{{ $todo_var->id }}"> </input>

                    <button type="submit" class="btn btn-secondary mt-5">Update Task</button>
                
                </form>
            </div>
        </div>

    </div>

    @endsection