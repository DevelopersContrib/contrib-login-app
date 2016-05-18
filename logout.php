<?php
  include 'contribsdk/contribclient.php';
  $api_key = 'xxxxxxxx';
  $client = new ContribClient($api_key);
  $client->logout('http://localhost/contrib/index.php');
  exit;
?>
