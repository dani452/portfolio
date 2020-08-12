<?php
define('DB_HOST','localhost');
define('DB_USER','admin');
define('DB_PASS','Admin93390,');
define('DB_NAME','portfolio');
  try {
    $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
?>
