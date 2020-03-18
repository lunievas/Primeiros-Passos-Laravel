<?php $produtos = [
    "Bicicleta",
    "Ovo",
    "Antialergico",
    "Meia"
];
//Usuario logado no sistema:
$user = "Luisa";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>

<body>
    <header>
        <nav>
            @if(isset($user))
            <a href="/logout">Logout</a>
            @endif
        </nav>
    </header>


    <table>
        <thead>
            <tr>
                <th>
                    Nome
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>
                    {{$produto}}
                </td>
            </tr>
            @endforeach

        </tbody>



    </table>


</body>

</html>