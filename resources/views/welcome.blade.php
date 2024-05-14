@extends('main')

@section('main-section')

    <div class="container">

        <div class="row pt-4 pb-3" >
            <div class="col-6"> 
                <h2 class="text-primary"> My Todo List </h2>
            </div>
            <div class="col-6 text-end"> 
                <a  href="{{route("todo.CreateTodoItem")}}" class="btn btn-secondary">
                    Add Todo Item
                </a>
            </div>
        </div>


        <table class="table table-striped">

            <tr>
                <th> Need To do </th>
                <th> Due Date </th> 
                <th> Due Time </th>
                <th> isDone   </th>
                <th> </th>
            </tr>

            @foreach($All_tasks as $i) 
                <tr> 
                    <td> {{$i->task_name}} </td>
                    <td> {{$i->due_date}} </td>
                    <td> {{$i->due_time}} </td>
                    <td>  <input type="checkbox" name="isChecked"/>  </td>
                    <td> 
                        <a href="{{route("todo.EditTodoItem", $i->id)}}" class = "btn btn-secondary"> Edit </a>
                        <a href="{{route("todo.ItemDelete", $i->id)}}" class = "btn btn-danger"> Delete </a>
                    </td>
    
                </tr>

            @endforeach

            

          


        </table>

    </div>




@endsection