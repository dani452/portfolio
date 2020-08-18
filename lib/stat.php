<?php
include 'lib/db.php';

    $ip   = $_SERVER['REMOTE_ADDR'];

    $sql="INSERT INTO  stat(ip, date) VALUES(:ip,NOW())";
    $query = $db->prepare($sql);
    $query->bindParam(':ip',$ip,PDO::PARAM_STR);
    $query->execute();
    $count = $query->rowCount();

?> 
