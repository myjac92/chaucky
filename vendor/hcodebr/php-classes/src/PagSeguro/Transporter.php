<?php
namespace Hcode\PagSeguro;

use \GuzzleHttp\Client;

class Transporter{

  public static function creatSession(){


      $client = new Client();
    $res = $client->request('POST',Config::getUrlSessions(). "?" . http_build_query
     (Config::getAuthentication()),[
       'verify'=>false
     ]);


    $xml = simplexml_load_string($res->getBody()->getContents());

    var_dump($xml);


  }


}






 ?>
