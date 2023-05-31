<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    @foreach ($todos as $todo )
        <a href="/todo/{{ $todo->id }}/{{ $todo->title }}"><h3>{{ $todo->title }}</h3></a>
    @endforeach
</body>
</html>
