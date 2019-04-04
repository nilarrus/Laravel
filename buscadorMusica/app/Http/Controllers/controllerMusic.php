<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerMusic extends Controller
{
    public function indLoc()
    {
        return view('localview');
    }
    public function index()
    {
        return view('view1');
    }
     /* 
        1r consulta 
        2n curl_setopt -> httpheader 
        3r curl_setopt -> return transfer(true) 
        4t curl_exec
        5e json_decoder true
        6e mostrar o enviar a la view
    */ 
    public function buscador(Request $request)
    {
        
        $consulta = $request ->input('consulta');
        //1r 
        $url = "http://musicbrainz.org/ws/2/artist?query=".$consulta;
        $c = curl_init( $url );

        //2n
        curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Accept:application/json','User-Agent:Laravel/5.7'));
        //3r
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        //4t
        $res = curl_exec($c);
        //5e
        $dades = json_decode($res,true);  
        //6e    
        return view('layouts.resultat',array('dades'=>$dades['artists']));   
    }
}

/*
        // inicialitzem la crida cURL
        $url = "http://musicbrainz.org/ws/2/artist/5b11f4ce-a62d-471e-81fc-a69a8278c7da?inc=aliases";
        $c = curl_init( $url );
        
        // Ajustem headers perquè ens retorni la info en format JSON
        // tb afegim User-Agent (identificador de client, si no Musicbrainz no funciona)
        curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Accept:application/json','User-Agent:Laravel/5.7'));
        // ajustos perquè ens retorni les dades sobre una variable
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        
        // cridem per obtenir les dades
        $res = curl_exec($c);
        
        // transformem les dades a un array associatiu de PHP
        $dades = json_decode($res,true);
        
        // mostrem nom ($dades ja és un array associatiu PHP)
        echo $dades["aliases"][0]["name"];
        */
