<?php
include '../lib/db.php';
session_start();
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }

$query = $db->prepare("SELECT * FROM tblcontactdata ORDER BY PostingDate DESC");
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

echo 
    "<table border='2'>
    <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Telephone</th>
    <th>email</th>
    <th>sujet</th>
    <th>message</th>
    <th>date</th>
    <th>vue (1=oui, 0=non)</th>
    <th>supprimer</th>
    </tr>";
    
    if($query->rowCount() > 0){
        foreach($results as $row){
            $id=$row->id;
            $fullname=$row->FullName;
            $PhoneNumber=$row->PhoneNumber;
            $EmailId=$row->EmailId;
            $Subject=$row->Subject;
            $Message=$row->Message;
            $PostingDate=$row->PostingDate;
            $Is_Read=$row->Is_Read;
           
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $fullname . "</td>";
            echo "<td>" . $PhoneNumber . "</td>";
            echo "<td>" . $EmailId . "</td>";
            echo "<td>" . $Subject . "</td>";
            echo "<td>" . $Message . "</td>";
            echo "<td>" . $PostingDate . "</td>";
            if ($Is_Read == 0){
                echo 
                    "<td>
                    <form method='POST' action='?id=" . $id ."'>
                    <input type='submit' name='readed' value='pas lu'>
                    </form>
                    </td>";
            }else{
                echo 
                    "<td>
                    <form method='POST' action='?id=" . $id . "'>
                    <input type='submit' name='notReaded' value='lu'>
                    </form>
                    </td>";
            };
            echo 
                "<td>
                <form method='POST' action='?id=" . $id . "'>
                <input type='submit' name='deleteContact' value='supprimer'>
                </form>
                </td>";
        };
    };
    
    if(isset($_POST['readed'])){
        
        $id=stripslashes($_REQUEST['id']);
        $isread=1;
        $sql = "UPDATE tblcontactdata SET Is_Read=:isread WHERE id=:id";
        $query = $db->prepare($sql);
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $query->bindParam(':isread',$isread);
        $result = $query->execute();
        if($result == true){
            echo "<div class='sucess'>
                <h3>Le message est lu.</h3>
                </div>";
                };
        $page = $_SERVER['PHP_SELF'];
        $sec = "2";
        header("Refresh: $sec; url=$page");
        };
        
        if(isset($_POST['notReaded'])){
        $id=stripslashes($_REQUEST['id']);
        $isread=0;
        $sql = "UPDATE tblcontactdata SET Is_Read=:isread WHERE id=:id";
        $query = $db->prepare($sql);
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $query->bindParam(':isread',$isread);
        $result = $query->execute();
        if($result == true)
        {
        echo "<div class='sucess'>
                <h3>Le message est devenu non lu.</h3>
                </div>";
                };
        $page = $_SERVER['PHP_SELF'];
        $sec = "2";
        header("Refresh: $sec; url=$page");
        };
        
    if(isset($_POST['deleteContact'])){
        
        $id=stripslashes($_REQUEST['id']);
        $sql="DELETE FROM tblcontactdata WHERE id=:id";
        $query = $db->prepare($sql);
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $result = $query->execute();
        if($result == true){
        echo "<div class='sucess'>
                <h3>Le message à été supprimée.</h3>
                </div>";
                };
        $page = $_SERVER['PHP_SELF'];
        $sec = "2";
        header("Refresh: $sec; url=$page");
        };
?>
<!DOCTYPE html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Daniel</title>
    <meta name="description" content="Bonjour à vous, voici mon portfolio de développeur web. Si vous etes à la recherche d'un développeur, je vous invite à voir mon site personnel. Bonne journée à vous !">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styleAdmin.css" />
</head>
<body>
<form action="home.php" method="post">
    <input type="submit" class="box-button" value="Accueil admin" style="width:150px;"></input>
</form>
</body>
</html>
