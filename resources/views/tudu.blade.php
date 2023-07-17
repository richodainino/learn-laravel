<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tudu App</title>
</head>
<body>
    <h1>What would you like Tudu?</h1>
    <form action="/tudu" method="post">
        @csrf
        <input type="text" name="name" id="name" required>
        <input type="submit" value="Add">
    </form>
    <ul>
        @foreach ($todos as $todo)
            <div>
                <li contenteditable="true" class="todo-item" id="{{ $todo['id'] }}"> {{ $todo['name'] }} </li>
                <form action="/tudu/{{ $todo['id'] }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>

                <form style="display: none" action="/tudu/{{ $todo['id'] }}" method="post" class="update-form" id="{{ $todo['id'] }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" class="update-name" name="update-name" value="{{ $todo['name'] }}"/>
                </form>
            </div>
        @endforeach
    </ul>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>