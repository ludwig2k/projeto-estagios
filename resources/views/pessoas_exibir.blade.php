<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pessoas</title>
</head>
<body class="container-lg bg-dark text-white">
    <h2>Pessoas Cadastradas</h2>
    <div class="row">
        <form action="{{route('pessoas_filter')}}" method="POST">
            @csrf
            <label>Pesquisa:</label>
            <input type="text" name="search">
            <label>Ordenar do dia:</label>
            <input type="date" name="data_inicial">
            <label>Até:</label>
            <input type="date" name="data_final">
            <button type="submit">Filtrar</button><br><br><br><br>
        </form>
       <table>
           <thead>  
            <th>Nome</th>
               <th>Sexo</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Rua</th>
                <th>Complemento</th>
                <th>Data de Nasc</th>
                <th>CPF</th>
           </thead>
           <tbody>
               @foreach ($pessoas as $pessoa )
               <tr> 
                   <td>{{$pessoa->nome}}</td>
                   <td>{{$pessoa->sexo}}</td>
                   <td>{{$pessoa->cidade}}</td>
                   <td>{{$pessoa->bairro}}</td>
                   <td>{{$pessoa->rua}}</td>
                   <td>{{$pessoa->complemento}}</td>
                   <td>{{date('d-m-Y',strtotime($pessoa->data_nascimento))}}</td>
                   <td>{{$pessoa->cpf}}</td>
                   <td>
                    <a href="{{route('pessoas_destroy', $pessoa->id)}}"><button>Delete</button></a>
                    <a href="{{route('pessoas_editar', $pessoa->id)}}"><button>Editar</button></a>
                   </td>
                   
               </tr>
                   
               @endforeach
           </tbody>
       </table>
       <br><br>
       <a href="{{route('pessoas_index')}}"><button>Criação de pessoas</button></a><br>

    </div>
</body>