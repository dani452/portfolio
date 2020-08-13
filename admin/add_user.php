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
<?php
include '../lib/db.php';
session_start();
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$email = stripslashes($_REQUEST['email']);
	$passwordToHash = stripslashes($_REQUEST['password']);
	
	$password = password_hash($passwordToHash, PASSWORD_DEFAULT);
	$type = stripslashes($_REQUEST['type']);
	
	$sql = "INSERT INTO users(username, email, type, password)
				  VALUES(:username, :email, :type, :password)";
    $query = $db->prepare($sql);
	$query->bindParam(':username',$username);
    $query->bindParam(':email',$email);
    $query->bindParam(':type',$type);
    $query->bindParam(':password',$password);
    $query->execute();
    $lastInsertId = $db->lastInsertId();
    if($lastInsertId)
    {
       echo "<div class='sucess'>
             <h3>L'utilisateur a été créée avec succés.</h3>
             <p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
			 </div>";
    }
}else{
?>
<form class="box" action="" method="post">
	<h1 class="box-logo box-title"><a>Ajouter un utilisateur</a></h1>
	<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
	<div class="input-group">
			<select class="box-input" name="type" id="type" >
				<option value="" disabled selected>Type</option>
				<option value="admin">Admin</option>
			</select>
	</div>
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="Ajouter" class="box-button" />
</form>
<?php } ?>
<form action="home.php" method="post">
    <input type="submit" class="box-button" value="Accueil admin" style="width:150px;"></input>
</form>
</body>
</html>
