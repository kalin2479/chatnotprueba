<?php
var_dump($_REQUEST);
if (isset($_REQUEST['hub_challenge'])){
  $challenge = $_REQUEST['hub_challenge'];
  $token = $_REQUEST['hub_verify_token'];
}

if ($token == "myCustomToken123"){
  echo $token;
}


?>
