<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paises</title>
</head>
<body>
    <h1>lista de paises</h1>
    <table class="table table-hover">
        <tr>
            <th><span class="text-danger" >Nombre</span></th>
            <th><span class="text-danger" >Capital</span></th>
            <th><span class="text-danger" >Moneda</span></th>
            <th><span class="text-danger" >Poblacion</span></th>
        </tr>
        @foreach ($naciones as $nombre => $nacion)
            <tr>
                <td><strong>{{ $nombre  }}</strong></td>
                <td><strong>{{ $nacion ["capital"] }}</strong></td>
                <td><strong>{{ $nacion ["Moneda"] }}</strong></td>
                <td><strong>{{ $nacion ["poblacion"]}}</strong></td>
            </tr>
        @endforeach
    </table>
    <a href="#" class="btn btn-success" aria-current="page">Confirmar</a>
    <a href="http://127.0.0.1:8000/arreglos" class="btn btn-danger" aria-current="page">Regresar</a>
    <a href="#" class="btn btn-primary active" aria-current="page">Modificar</a>
</body>
</html>
