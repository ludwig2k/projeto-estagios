<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="container-lg bg-dark text-white">
    <form action="{{ route('login_login') }}" method="POST">
        @csrf

    <div class="text-center" style="padding-top: 100px">
        <h2>Faça seu login</h2><br>
        <label name="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label name="password">Senha:</label>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit">Enviar</button><br>
        <a href="{{route('cadastro_index')}}">Fazer um cadastro</a>
    </form>
    </div>
</body>