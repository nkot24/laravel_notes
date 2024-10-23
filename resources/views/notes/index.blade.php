<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Notes</h1>
    <ul>
        @foreach ($allNotes as $note)
           <li>
                <h2>{{ $note->title }}</h2>
                <h2>{{ $note->content }}</h2>
           </li> 
        @endforeach
    </ul>
    <a href="/notes/create">Create Note</a>
</body>
</html>