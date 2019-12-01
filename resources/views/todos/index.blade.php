<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Todos</title>
</head>
<body>
    <div class="container">
            <h1 class="text-center text-danger">Todo Page</h1>
            <a href="{{route('todos.create')}}" class="btn btn-info">New todos</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Complete</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($test as $todo)
                        <tr>
                            <th scope="row">{{ $todo->id}}</th>
                            <td>{{ $todo->name}}</td>
                            <td>{{ $todo->description}}</td>
                            <td>{{ $todo->completed}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('todos.edit',$todo->id)}}" type="button" class="btn btn-success">Edit</a>
                                    <a href="{{route('todos.delete',$todo->id)}}" type="button" class="btn btn-danger">Delete</a>
                                  </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
    </div>
    
</body>
</html>