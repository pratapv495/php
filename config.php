<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '772419617209564',
  'app_secret'     => 'b969ce73c9dbf7ef5ebc4c312b273616',
  'default_graph_version'  => 'v14.0'
]);

?>
