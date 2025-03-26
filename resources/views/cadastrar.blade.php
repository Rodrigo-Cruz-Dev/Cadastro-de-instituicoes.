<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Entidade</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    <link href="../../font-awesome/css/all.css" rel="stylesheet">
</head>
<body>
    <div class="content">
        <aside>
            <h1><span class="corroxa">Se</span> Cadastrar</h1>
        </aside><br>

        <form method="POST" action="{{ route('cadastrar.store') }}">
            @csrf

            <label for="nomesinst">Nome da Instituição:</label><br>
            <input type="text" name="nomesinst" id="nomesinst" required><br>

            <label for="tel1">Telefone 1:</label><br>
            <input type="text" name="tel1" id="tel1" required><br>

            <label for="tel2">Telefone 2:</label><br>
            <input type="text" name="tel2" id="tel2" required><br>

            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required><br>

            <label for="campatuacao">Campo de Atuação:</label><br>
            <input type="text" name="campatuacao" id="campatuacao" required><br>

            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" rows="4" required></textarea><br>

            <button type="submit">Cadastrar</button><br>
        </form>
        <a href="{{ url('/') }}">Voltar</a>
    </div>
</body>
</html>