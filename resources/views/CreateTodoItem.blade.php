@extends('main')

@section('main-section')

    <div class="container">

        <div class="row pt-4 pb-3" >
            <div class="col-6"> 
                <h2 class="text-primary"> Add ToDo Item </h2>
            </div>
            <div class="col-6 text-end"> 
                <a href="{{route("todo.welcome")}}" class="btn btn-secondary">
                    Back
                </a>
            </div>
        </div>

        <div class = "card">
            <div class = "card-body"> 
                <form method = "POST" action = "{{ route('todo.store') }}"> 
                    @csrf
                    <label for = "" class = "form-label mt-4"> Task </label> 
                    <input type="text" name = "task-name" class = "form-control"> </input>

                    <label for = "" class = "form-label mt-4"> Due Date </label> 
                    <input type="date" name = "due-date" class = "form-control"> </input>

                    <label for = "" class = "form-label mt-4"> Due Time </label> 
                    <input type="time" name = "due-time" class = "form-control"> </input>

                    <button type="submit" class="btn btn-secondary mt-5">Add Task</button>
                
                </form>
            </div>
        </div>

    </div>




@endsection