<?php
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
//  trigger_error("Travis need More", E_USER_ERROR);
//  var_dump("test");
  echo 'Caught exception: ',  $e->getMessage(), "\n";

}

?>
