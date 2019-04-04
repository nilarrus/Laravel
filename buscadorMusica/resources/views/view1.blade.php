<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscador</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form class="form-inline"  method="post" action('controllerMusic@buscador')>
                {{csrf_field()}}
                <h3> Buscador de artistas </h3>
                <div class="form-group">
                    <input type="text" class="form-control" name='consulta' id="inputArt" placeholder="Artista" >
                    <button type="submit" class="btn btn-primari">Buscar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>