<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List | Laravel</title>
    <style>
        body {
            font-family: sans-serif;
        }
        input {
            min-height: 2em;
            width: 100%;
            display: block;
            padding-inline: .65em;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin-inline: auto;
        }
        button[type="submit"] {
            padding: .5em 2em;
            font-weight: 700;
            text-transform: uppercase;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main class="container">
        <h1>To Do:</h1>
        <form action="{{ route('saveItem') }}" method="post">
            {{ csrf_field() }}
            <label for="list-item" style="width: 0;height: 0;opacity: 0;">To Do: </label>
            <input type="text" name="list-item" id="list-item" placeholder="Add a To Do list item...">
            <button type="submit">Add</button>
        </form>
    </main>
</body>
</html>