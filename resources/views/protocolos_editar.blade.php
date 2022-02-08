<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Atualização de protocolo</title>
</head>
<body class="container-lg bg-dark text-white">
    <form = action="{{route('protocolos_update')}}" method="POST">
        @csrf
       
    <div class="text-center" style="padding-top: 100px">
        <input type="hidden" value="{{$protocolo->id}}" name="protocolo_id">
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
        <label name="descricao">Descrição: </label>
        <input type="text" id="descricao" name="descricao" value="{{$protocolo->descricao}}"><br><br>
        <label name="prazo">Prazo: </label>
        <input type="date" id="prazo" name="prazo" value="{{date('Y-m-d',strtotime($protocolo->prazo))}}"><br><br>
        <select name="pessoa" id="pessoa">
        @foreach ( $pessoas as $pessoa)
        
        <option value="{{$pessoa->id}}">{{$pessoa->nome }}</option>
            
        @endforeach
    </select>
        <button type="submit">Enviar</button><br>
        <a href="{{route('pessoas_index')}}">Cadastro de pessoas</a><br>
        <a href="{{route('protocolos_exibir_todos')}}">Exibir protocolos</a>
    </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
