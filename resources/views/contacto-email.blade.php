<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Placasur - Datos de envio</title>
</head>

<body>
    <h2 class="mb-2">Mensaje enviado por medio de la Web:</h2>
    <p><strong>Nombre: </strong>{{ Str::ucfirst($data['nombre']) }}</p>
    <p><strong>Apellido: </strong>{{ str::ucfirst($data['apellido']) }}</p>
    <p><strong>Asunto: </strong>{{ Str::ucfirst($data['asunto']) }}</p>
    <p><strong>Email: </strong>{{ $data['email'] }}</p>
    <p><strong>Teléfono: </strong>{{ $data['telefono'] }}</p>
    <p><strong>Rubro: </strong>{{ Str::ucfirst($data['rubro']) }}</p>
    <p><strong>Mensaje: </strong>{{ str::ucfirst($data['mensaje']) }}</p>
</body>

</html>
