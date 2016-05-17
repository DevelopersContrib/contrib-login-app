<?php
  include 'contribsdk/contribclient.php';
  $api_key = 'a088239f8263dc8f';
  $client = new ContribClient($api_key);
  $client->logout('http://localhost/contrib/index.php');
  exit;
?>