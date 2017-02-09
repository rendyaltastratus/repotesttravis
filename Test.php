<?php
// set_error_handler('myErrorHandler');
// register_shutdown_function('fatalErrorShutdownHandler');
// function myErrorHandler($code, $message, $file, $line) {
//   var_dump($code,$message,$file,$line);
// }
// function fatalErrorShutdownHandler()
// {
//   $last_error = error_get_last();
//   if ($last_error['type'] === E_ERROR) {
//     // fatal error
//     myErrorHandler(E_ERROR, $last_error['message'], $last_error['file'], $last_error['line']);
//   }
// }
// The key is that functions registered with register_shutdown_function()
// are called even on a fatal error - including out of memory errors.
// error_get_last() can then be used to detect whether we’re ending the script because of a fatal error, and pass the error info to your custom error handler if so.
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try{
  echo inverse(0);
}
catch(Exception $e ){
  ini_set('display_errors',1);

  //var_dump("test");
  // echo 'Caught exception: ',  $e->getMessage(), "\n";

    $ch = curl_init('199.223.211.102');
     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: devaudi.org'));
    curl_setopt($ch, CURLOPT_URL, $url="http://199.223.211.102/COPYRIGHT.txt");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data= curl_exec($ch);
    curl_close();
    var_dump($data);

    trigger_error(print_r($c,1).": Travis need More", E_USER_ERROR);
}

?>
