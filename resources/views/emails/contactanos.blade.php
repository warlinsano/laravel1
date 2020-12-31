<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        h1{
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Correo Electronico</h1>
    <p>Estes es un  correo electronico desde Laravel</p>

    <p><strong>Nombre:</strong> {{ $contacto['name']}}</p>
    <p><strong>Correo:</strong> {{ $contacto['correo']}}</p>
    <p><strong>Mensaje:</strong> {{ $contacto['mensaje']}}</p>


</body>
</html>
