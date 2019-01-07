<?php
namespace Hcode\PagSeguro;

class Config {

  const SANDBOX =true;

  const SANDBOX_EMAIL = "jobkcn88@gmail.com";
  const PRODUCTION_EMAIL = "jobkcn88@gmail.com";

  const SANDBOX_TOKEN ="4FDE505E88E9492BBA80DD99D787B6B1";
  const PRODUCTION_TOKEN = "B587E0E40AB54ECEBA15F8AF9FC32119";

  const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";
  const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";

  const SANDBOX_URL_JS ="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
  const PRODUCTION_URL_JS="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";


public static function getAuthentication():array
{

  if (Config::SANDBOX===true) {
    return [
      'email'=>Config::SANDBOX_EMAIL,
      'token'=>Config::SANDBOX_TOKEN
    ];
  }else {

    return [
      'email'=>Config::PRODUCTION_EMAIL,
      'token'=>Config::PRODUCTION_TOKEN
    ];

  }

}
public static function getUrlSessions(){

  return (Config::SANDBOX===true) ? Config::SANDBOX_SESSIONS:Config::PRODUCTION_SESSIONS;
}

public static function getUrlJS(){

    return (Config::SANDBOX===true) ? Config::SANDBOX_URL_JS:Config::PRODUCTION_URL_JS;
}


}
//www.chauckycommerce.com.br/payment/notification

 ?>
