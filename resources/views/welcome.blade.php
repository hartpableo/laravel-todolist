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
        <form action="{{ route('saveItem') }}" method="post" style="margin-bottom: 1.7rem;">
            {{ csrf_field() }}
            <label for="list-item" style="width: 0;height: 0;opacity: 0;">To Do: </label>
            <input type="text" name="list-item" id="list-item" placeholder="Add a To Do list item...">
            <button type="submit">Add</button>
        </form>
        
        @if($listItems->count() > 0)
        <ol aria-label="List of things to do">

            @foreach ($listItems as $listItem)
                <li style="margin-bottom: .85em;min-height: 2.5em;">
                    <span style="font-size: 1.25rem;font-weight: 500;">{{ $listItem->name }}</span>
                    <form action="{{ route('markComplete', $listItem->id) }}" method="post" style="float: right;">
                        {{ csrf_field() }}
                        <button type="submit">Complete</button>
                    </form>
                </li>            
            @endforeach

        </ol>
        @else

        <p>Nothing to do yet...</p>

        @endif

    </main>
</body>
</html>