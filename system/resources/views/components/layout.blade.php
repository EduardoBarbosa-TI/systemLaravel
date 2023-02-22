<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row w-100">
            @isset($mensagemSuccess)
                <div class="alert alert-success col-12 col-md-12 my-3" role="alert">
                    {{ $mensagemSuccess }}
                </div>
            @endisset
            <div class="col-12 col-md-4">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column mt-5">
                        <h4 class="mb-2">Tabelas do Banco de Dados System</h4>
                        <ul class="list-group list-group-flush">
                            @foreach ($dataBaseTables as $i => $table)
                                <li class="list-group-item gap-5">
                                    {{ $table->Tables_in_system }}

                                    
                                
                                </li>
                            @endforeach  
                          </ul>
                    </nav>
                </nav>
            </div>
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <form action="{{ route('consult.create') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">
                                    <h3 class="m-2 mt-5">Consultas SQL</h3>
                                </label>
        
                                <textarea class="form-control" id="textArea" name="textArea" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary  my-3 mb-5">Enviar</button>
                        </form>
                    </div>
                    


