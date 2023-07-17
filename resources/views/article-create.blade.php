<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tudu App</title>
</head>
<body>
    <h1>What would you like Tudu?</h1>
    <form action="/articles" method="post">
        @csrf
        <input type="text" name="name" id="name" required>
        <input type="submit" value="Add">
    </form>
</body>
</html>