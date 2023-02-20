<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="col-8 col-md-8 ">
                <form action="{{ route('consult.create') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">
                            <h3 class="m-2 mt-5">Consultas SQL</h3>
                        </label>

                        <textarea class="form-control" id="textArea" name="textArea" rows="7"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary  mt-3">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
