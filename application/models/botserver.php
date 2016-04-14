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

  function php_get($url_route){
    $url = "http://ken-botcards.azurewebsites.net".$url_route;
    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'method'  => 'GET',
            'header' => 'Accept-language: en\r\n'
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    return $result;
  }

  function get_token()
  {
    $dataArray = array("team" => "B06", "name" => "FilthyCasuals","password" => "tuesday");
    $handle = $this->botserver->php_post($dataArray, "/register");
    $agent = new SimpleXMLElement($handle);
    if($agent->getName() == "error"){
      if(!IS_NULL($this->session->userdata('token'))){
        return $this->session->userdata('token');
      }
    }
    else{
      $this->session->set_userdata('token',(String)$agent->token);
      return $agent->token;
    }
  }


  function get_state(){
    $handle = $this->botserver->php_get("/status");
    $status = new SimpleXMLElement($handle);
    return $status->state;
  }

  function get_round(){
    $handle = $this->botserver->php_get("/status");
    $status = new SimpleXMLElement($handle);
    return $status->round;
  }
}
?>
