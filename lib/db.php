<?php
define('DB_HOST','us-cdbr-east-02.cleardb.com');
define('DB_USER','bd4e426d3f8d6d');
define('DB_PASS','53bc057c');
define('DB_NAME','/heroku_75c567d16bc48e4?reconnect=true');
  try {
    $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
?>
