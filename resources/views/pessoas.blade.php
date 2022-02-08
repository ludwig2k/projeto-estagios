<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    <div class="bg-dark text-white">
        
    <div class="text-center" style="padding-top: 100px">
        <form action="{{ route('pessoas_store') }}" method="POST">
            @csrf
        <h2>Cadastro de Pessoas</h2><br>
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Faça seu cadastro</h3>
                            <p>Preencha os campos abaixo:</p>
                            <form class="requires-validation" novalidate>
    
                                <div class="col-md-6 w-100">
                                   <input class="form-control" type="text" name="nome" placeholder="Nome Completo" required>
                                </div>

                                <div class ="col-md-6 w-100" style="display: flex; justify-content: space-between; margin-top: 10px">

                                <div class="">
                                    <input type="radio" name="sexo" placeholder="Sexo" value="M" required>
                                    <label for="sexo">Masculino</label>
                                </div>
                                <div class="">
                                    <input type="radio" name="sexo" placeholder="Sexo" value="F" required>
                                    <label for="sexo">Feminino</label>
                                </div>
                                <div class="">
                                    <input type="radio" name="sexo" placeholder="Sexo" value="N" required>
                                    <label for="sexo">Não-Binário</label>
                                </div>
                                <div class="">
                                    <input type="radio" name="sexo" placeholder="Sexo" value="O" required>
                                    <label for="sexo">Outro</label>
                                </div>
                                </div>
                                
    
                                <div class="col-md-6 w-100">
                                    <input class="form-control" type="text" name="cidade" placeholder="Cidade" required>
                                </div>
    
                                <div class="col-md-6 w-100">
                                    <input class="form-control" type="text" name="bairro" placeholder="Bairro" required>
                                </div>

                                <div class="col-md-6 w-100">
                                    <input class="form-control" type="text" name="rua" placeholder="Rua" required>
                                </div>
    
    
                                <div class="col-md-6 w-100">
                                    <input class="form-control" type="text" name="complemento" placeholder="Complemento" required>
                                </div>

                                <div class="col-md-6 w-100">
                                    <label>Data de Nascimento</label>
                                    <input class="form-control" type="date" name="data_nascimento"  required>
                                </div>
    
                                <div class="col-md-6 w-100">
                                    <input class="form-control" type="text" name="cpf" placeholder="CPF" required>
                                </div>
                      
                                <div class="row" style="margin-top: 10px">
                                    <a href=""><button id="" type="submit" style="width: 100px" class="btn btn-success">Enviar</button></a>
                                </div>
                                <div style="display: flex; justify-content: space-around; margin-top: 10px">
                                    
                                
                                <a href="{{route('protocolos_index')}}" target="_blank">Protocolos</a>

                                <a href="{{route('logout')}}">Logout</a>
                                <a href="{{route('pessoas_exibir_todos')}}">Exibir pessoas</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </form>
    </div>
</div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
