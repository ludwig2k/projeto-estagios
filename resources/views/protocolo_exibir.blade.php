<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Protocolos</title>
</head>
<body class="container-lg bg-dark text-white">
    <h2>Protocolos</h2>
    <div class="row">
        <form action="{{route('protocolos_filter')}}" method="POST">
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
            <th>Atendente</th>
               <th>Descrição</th>
                <th>Prazo</th>
                <th>Receptor</th>
                <th>Ações</th>
           </thead>
           <tbody>
               @foreach ($protocolos as $protocolo )
               <tr> 
                   <td>{{$protocolo->getAtendente->nome}}</td>
                   <td>{{$protocolo->descricao}}</td>
                   <td>{{date('d-m-Y',strtotime($protocolo->prazo))}}</td>
                   <td>{{$protocolo->getReceptor->nome}}</td>
                   <td>
                       <a href="{{route('protocolos_destroy', $protocolo->id)}}"><button>Delete</button></a>
                       
                       <a href="{{route('protocolos_editar', $protocolo->id)}}"><button>Editar</button></a>
                       
                   </td>
               </tr>
                   
               @endforeach
           </tbody>
       </table>
       <br><br>
       <a href="{{route('protocolos_index')}}"><button>Criação de protocolos</button></a><br>

    </div>
</body>