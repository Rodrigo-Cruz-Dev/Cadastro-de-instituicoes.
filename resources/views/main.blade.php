<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">

    <link href="../../font-awesome/css/all.css" rel="stylesheet">
    
<body>
    
    <div class="content">
        <aside>
            <h1><span class="corroxa">Venha</span> Ajudar!</h1>
            <img class="img-logo"src="{{ asset ( 'images\logoindex.jpg' ) }}" alt="" srcset="">
        </aside>

        <form>
            <h2>Cadastre sua <span class="corroxa">entidade</span><br> ou acesse dados <span class="corroxa">de parceiras</span></h2>

                <a href="{{ route('cadastrar.create') }}">Cadastrar entidade</a>
                <a href="{{ route('entidades.index') }}">Ver entidades cadastradas</a>

            </form>    

            <footer>
                <p>Sua entidade não se enquadra nos campos de atuação disponíveis?</p>
                <a href="">Registrar novo campo de atuação</a>
            </footer>
        

    </div>
</body>
</html>