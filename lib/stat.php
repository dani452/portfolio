<?php
include 'lib/db.php';

    $ip   = $_SERVER['REMOTE_ADDR'];

    $sql="INSERT INTO  stat(ip, date) VALUES(:ip, :date)";
    $query = $db->prepare($sql);
    $query->bindParam(':ip',$ip);
    $query->bindParam(':date', getDatetimeNow());
    $query->execute();

    function getDatetimeNow() {
        $tz_object = new DateTimeZone('Europe/Paris');
    
        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('Y\-m\-d\ H:i:s');
    }
?> 
