<?php
include 'lib/db.php';

    $ip   = $_SERVER['REMOTE_ADDR'];

    $sql="INSERT INTO  stat(ip, date) VALUES(:ip, :date)";
    $query = $db->prepare($sql);
    $query->bindParam(':ip',$ip);
    $query->bindParam(':date',date("Y-m-d H:i:s"));
    $query->execute();

?> 
