<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscador</title>
</head>
@php
    $id = "John";
    
    $url = "http://musicbrainz.org/ws/2/artist?query=".$id;
    
    $c = curl_init( $url );
    

    curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Accept:application/json','User-Agent:Laravel/5.7'));

    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    

    $res = curl_exec($c);
    

    $dades = json_decode($res,true);
    
    $dadesFinals = $dades["artists"];
   

@endphp
<body>
    <div class="container">
        <div class="row">
            @php
              //var_dump(count($dades));
              //var_dump($dadesFinals);
              for ($i=0; $i <count($dadesFinals); $i++) { 
                  //var_dump($dadesFinals[$i]);
                echo $dadesFinals[$i]["id"]."</br>";
                echo $dadesFinals[$i]["type"]."</br>";
                echo $dadesFinals[$i]["name"]."</br>";
                echo $dadesFinals[$i]["area"]["name"]."</br>";
                echo "<hr>";
              }
            
           @endphp
        </div>
    </div>
</body>
</html>
