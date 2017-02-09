<?php
ini_set('display_errors',1);
class TravisControllerCI{
  var $filename= 'travis.ci.txt';
  var $domain="domain.com";
  var $ip_address="";
  var $result;

  public function __construct($filename="",$domain="",$ip_address=""){
      $this->filename=$filename==""?$this->filename:$filename;
      $this->domain=$domain;
      $this->ip_address=$ip_address;
      $this->travis_curl_get();
  }

  function travis_curl_get(){

      $ch = curl_init($this->ip_address);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: '.($this->domain)));
      curl_setopt($ch, CURLOPT_URL, "http://".($this->ip_address)."/".($this->filename));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $data= curl_exec($ch);
      curl_close($ch);
      $this->result=$data;
      return $data;
  }

  function result_(){
    return $this->result;
      // trigger_error($this->result, E_USER_ERROR);
  }

  function run(){
      if(strpos($this->result,'error')!==false){
        $data="Travis not allowed to Commit or somethings, please check your server Error first ";
        trigger_error($data, E_USER_ERROR);
    }
    else{
      echo "It's Valid Just go On";
    }
  }

}

$TravisControllerCI = new TravisControllerCI("","devaudi.org","199.223.211.102");

$TravisControllerCI->run();





// function inverse($x) {
//     if (!$x) {
//         throw new Exception('Division by zero.');
//     }
//     return 1/$x;
// }
//
// try{
//   echo inverse(0);
// }
// catch(Exception $e ){
//   ini_set('display_errors',1);
//
//   //var_dump("test");
//   // echo 'Caught exception: ',  $e->getMessage(), "\n";
//
//     $ch = curl_init('199.223.211.102');
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: devaudi.org'));
//     curl_setopt($ch, CURLOPT_URL, $url="http://199.223.211.102/COPYRIGHT.txt");
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     $data= curl_exec($ch);
//     curl_close();
//     var_dump($data.=": Travis need More");
//
//     trigger_error($data, E_USER_ERROR);
// }

?>
