<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
    <form action="{{route('todos.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name">
            @error ('name') {{$message}} @enderror
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input type="text" class="form-control  @error ('name') is-invalid @enderror" id="description" name="description">
            @error ('description') {{$message}} @enderror
        </div>
        <div class="form-group">
            <label for="completed">complete</label>
            <input type="text" class="form-control" id="complete" name="completed">
            @error ('completed') {{$message}} @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>