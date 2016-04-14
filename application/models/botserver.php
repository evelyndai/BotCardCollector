<?php

class Botserver extends main_Model {
  function __construct() {
      parent::__construct();
  }

  function php_post($data, $url_route)
  {
      $url = "http://ken-botcards.azurewebsites.net".$url_route;
      // use key 'http' even if you send the request to https://...
      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($data)
          )
      );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      // if ($result === FALSE) { /* Handle error */ }

//        print_r($result);
//        die();
      return $result;
  }
}
?>
