<?php

use Illuminate\Database\Seeder;
use App\artist;

class artistas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedArtistas();
        $this->command->info('Tabla artistas iniciada con datos');
    }
    private function seedArtistas(){
        DB::table('artist')->delete();
        self::crearArtistas();

    }
    function crearArtistas(){
        $array = self::datos();
        for ($i=0; $i <count($array); $i++) { 
          $artista = new artist;
          $artista->_id = $array[$i]["id"];
          $artista->type = $array[$i]["type"];
          $artista->name = $array[$i]["name"];
          $artista->locate = $array[$i]["area"]["name"];
          $artista->save();
        }
    }


    function datos(){
        $id = "John";
    
        $url = "http://musicbrainz.org/ws/2/artist?query=".$id;
        
        $c = curl_init( $url );
        
    
        curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Accept:application/json','User-Agent:Laravel/5.7'));
    
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        
    
        $res = curl_exec($c);
        
    
        $dades = json_decode($res,true);
        
        $dadesFinals = $dades["artists"];
        return $dadesFinals;
    }

}
