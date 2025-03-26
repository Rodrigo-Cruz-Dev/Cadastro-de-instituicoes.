<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Entidades</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
</head>
<body>
    <div class="content">
    <h1><span class="corroxa">Entidades</span> Cadastradas</h1>
         
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone 1</th>
                    <th>Telefone 2</th>
                    <th>Email</th>
                    <th>Campo de Atuação</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cadastros as $cadastro)
                    <tr>
                        <td>{{ $cadastro->nomesinst }}</td>
                        <td>{{ $cadastro->tel1 }}</td>
                        <td>{{ $cadastro->tel2 }}</td>
                        <td>{{ $cadastro->email }}</td>
                        <td>{{ $cadastro->campatuacao }}</td>
                        <td>{{ $cadastro->descricao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
<br>
        <a href="{{ url('/') }}">Voltar</a>
    </div>
</body>
</html>
