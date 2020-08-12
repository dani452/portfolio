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
include '../lib/securityForm.php';
session_start();

if (isset($_POST['login'])){
    $username = valid_donnees($_REQUEST['username']);
    $_SESSION['username'] = $username;
    $sth = $db->prepare("SELECT * FROM users WHERE username = ? ORDER BY id DESC LIMIT 1");
    $sth->execute(array($username)); 
    $userDb = $sth->fetch();
    $password = valid_donnees($_REQUEST['password']);
    
if (password_verify($password, $userDb['password'])) {
    if ($userDb['type'] == 'admin'){
        header('Location: home.php');      
    } else {
    echo "<div class='sucess'>
             <h3>Le nom d'utilisateur ou le mot de passe est incorrect.</h3>
			 </div>";
    }
}
}else{
?>
<form class="box" action="" method="post" name="loginForm">
<h1 class="box-logo box-title">
  <a>Se connecter</a>
</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion" name="login" class="box-button">
</form>
<?php } ?>
</body>
</html>
