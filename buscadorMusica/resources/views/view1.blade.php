<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Buscador</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Acceder a datos locales</h2>
            <a class="btn btn-primary" href="/local" role="button">Local</a>
        </div>
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
        <h2>Datos</h2>
        @yield('content')
    </div>
</body>
</html>