<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Departments</title>
</head>
<body>
    <h1>Departments</h1>

    <div>
        @forelse ($departments as $department)
        <p>
            {{ $department->name }}
        </p>
            
        @empty
            <p>
                Nessun dipartimento trovato.
            </p>
        @endforelse
    </div>
</body>
</html>