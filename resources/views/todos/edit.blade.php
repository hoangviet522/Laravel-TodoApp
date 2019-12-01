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
    <form action="{{route('todos.update',$targetEdit->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name" value="{{ $targetEdit->name }}">
            @error ('name') {{$message}} @enderror
        </div>
        <input type="hidden" name="id" value="{{ $targetEdit->id }}">
        <div class="form-group">
            <label for="description">description</label>
            <input type="text" class="form-control @error ('description') is-invalid @enderror" id="description" name="description" value="{{ $targetEdit->description }}">
            @error ('description') {{$message}} @enderror
        </div>
        <div class="form-group">
            <label for="complete">complete</label>
            <input type="text" class="form-control @error ('completed') is-invalid @enderror" id="complete" name="completed" value="{{ $targetEdit->completed }}">
            @error ('completed') {{$message}} @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>