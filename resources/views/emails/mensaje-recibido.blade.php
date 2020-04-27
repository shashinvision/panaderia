<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo</title>
</head>
<body>
<h1>Recibiste un mensaje de: {{$mensaje['name']}}</h1>
<h2>Fono: {{$mensaje['fono']}}</h2>
<h2>Email: {{$mensaje['email']}}</h2>
<p>{{$mensaje['mensaje']}}</p>
</body>
</html>