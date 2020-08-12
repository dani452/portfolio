<?php
include '../lib/db.php';
include '../lib/securityForm.php';
session_start();
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }

$query = $db->prepare("SELECT * FROM opinion ORDER BY PostingDate DESC");
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

echo 
    "<table border='2'>
    <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Avis</th>
    <th>Est visible?</th>
    <th>Date</th>
    <th>Supprimer</th>
    </tr>";
    
    if($query->rowCount() > 0){
        foreach($results as $row){
            $id=$row->id;
            $fullname=$row->FullName;
            $message=$row->Message;
            $isvisible=$row->Is_Visible;
            $postingdate=$row->PostingDate;
           
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $fullname . "</td>";
            echo "<td>" . $message . "</td>";
            if ($isvisible == 0){
                echo 
                    "<td>
                    <form method='POST' action='?id=" . $id ."'>
                    <input type='submit' name='apparition' value='non'>
                    </form>
                    </td>";
            }else{
                echo 
                    "<td>
                    <form method='POST' action='?id=" . $id . "'>
                    <input type='submit' name='disparition' value='oui'>
                    </form>
                    </td>";
            };
            echo "<td>" . $postingdate . "</td>";
            echo 
                "<td>
                <form method='POST' action='?id=" . $id . "'>
                <input type='submit' name='deleteOpinion' value='supprimer'>
                </form>
                </td>";
        };
    };
    
    if(isset($_POST['apparition'])){
        
        $id=valid_donnees($_REQUEST['id']);
        $isvisible=1;
        $sql = "UPDATE opinion SET Is_Visible=:isvisible WHERE id=:id";
        $query = $db->prepare($sql);
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $query->bindParam(':isvisible',$isvisible);
        $result = $query->execute();
        if($result == true){
            echo "<div class='sucess'>
                <h3>L'opinion est devenu visible.</h3>
                </div>";
                };
        $page = $_SERVER['PHP_SELF'];
        $sec = "2";
        header("Refresh: $sec; url=$page");
        };
        
        if(isset($_POST['disparition'])){
        $id=valid_donnees($_REQUEST['id']);
        $isvisible=0;
        $sql = "UPDATE opinion SET Is_Visible=:isvisible WHERE id=:id";
        $query = $db->prepare($sql);
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $query->bindParam(':isvisible',$isvisible);
        $result = $query->execute();
        if($result == true)
        {
        echo "<div class='sucess'>
                <h3>L'opinion n'est plus visible.</h3>
                </div>";
                };
        $page = $_SERVER['PHP_SELF'];
        $sec = "2";
        header("Refresh: $sec; url=$page");
        };
        
    if(isset($_POST['deleteOpinion'])){
        
        $id=valid_donnees($_REQUEST['id']);
        $sql="DELETE FROM opinion WHERE id=:id";
        $query = $db->prepare($sql);
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $result = $query->execute();
        if($result == true){
        echo "<div class='sucess'>
                <h3>L'opinion à été supprimée.</h3>
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
