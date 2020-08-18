<?php
include '../lib/db.php';
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
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
    <div class="sucess">
    <h1>Bienvenue <?php echo strip_tags($_SESSION['username']); ?>!</h1>
    <p>C'est votre espace admin.</p>
    <?php 
    $stmt = $db->query('SELECT * FROM stat');
    $row_count = $stmt->rowCount();
    echo '<p>Nombre de connection = ' . $row_count . '</p><br>' ?>
    <a href="add_user.php">Ajouter un utilisateur</a> | 
    <a href="avis_client.php">Avis client</a> | 
    <a href="db_contact.php">Contact</a> | 
    <a href="logout.php">Déconnexion</a>
    </ul>
    </div>
  </body>
</html> 
