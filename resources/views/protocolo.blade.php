<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Protocolos</title>
</head>
<body>
    <div class="bg-dark text-white">
        
        <div class="text-center" style="padding-top: 100px">
    <form = action="{{route('protocolos_store')}}" method="POST">
        @csrf
        <h2>Criação de Protocolos</h2><br>
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Crie um protocolo</h3>
                            <p>Preencha os campos abaixo:</p>
                            <form class="requires-validation" novalidate>
    
                                <div class="col-md-4 w-100">
                                   <input class="form-control" type="text" name="descricao" placeholder="Descrição" required>
                                </div>

                                <div class="col-md-6 w-100">
                                    <label>Prazo</label>
                                    <input class="form-control" type="date" name="prazo"  required>
                                </div>

                                <div class="col-md-6 w-100">
                                    <label>Selecione o receptor</label>
                                    <select name="pessoa" id="pessoa">
                                    @foreach ( $pessoas as $pessoa)
                                    
                                    <option value="{{$pessoa->id}}">{{$pessoa->nome }}</option>
                                        
                                    @endforeach
                                </select> 
                                </div>
                                
                                <div class="row" style="margin-top: 10px">
                                    <a href=""><button id="" type="submit" style="width: 100px" class="btn btn-success">Enviar</button></a>
                                </div>
                                <div style="display: flex; justify-content: space-around; margin-top: 10px">
                                    
                                
                                    <a href="{{route('pessoas_index')}}">Cadastro de pessoas</a><br>
                                    <a href="{{route('protocolos_exibir_todos')}}">Exibir protocolos</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
