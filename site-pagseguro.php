<?php
use \Hcode\Page;
use \Hcode\Model\User;
//use \GuzzleHttp\Client;
use \Hcode\PagSeguro\Config;
use \Hcode\PagSeguro\Transporter;
use \Hcode\Model\Order;

$app->get('/payment',function(){
/*
      $client = new Client();
      $res = $client->request('POST',Config::getUrlSessions(). "?" . http_build_query
       (Config::getAuthentication()),[
         'verify'=>false
       ]);

       echo $res->getBody()->getContents();
*/
    User::verifyLogin(false);
    $order = new Order();
    $order->getFromSession();
    $years = [];
    for ($y= date('Y'); $y < date('Y') +14; $y++) {
      array_push($years,$y);
    }
    $page = new Page();
    $page->setTpl("payment",[

      "order"=>$order->getValues(),
      "msgError"=>$order->getMsgError(),
      "years"=>$years,
      "pagseguro"=>[
        "urlJS"=>Config::getUrlJS(),
       "id"=>Transporter::creatSession(),
       "maxInstallmentNoInterest"=>Config::MAX_INSTALLMENT_NO_INTEREST,
       "maxInstallment"=>Config::MAX_INSTALLMENT
      ]
    ]);


});



 ?>
