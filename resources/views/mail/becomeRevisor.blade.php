<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lavora con noi</title>
</head>
<body>

    <div>

    <h1>Un utente ha chiesto di diventare revisore</h1>

    <p>Nome:{{$user->name}}</p>
    <p>Email:{{$user->email}}</p>
    <a href="{{route('makeRevisor', compact('user'))}}" class="btn btn-success"> Rendi revisore </a>

    </div>
    
</body>
</html>