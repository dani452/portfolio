<?php 

if(isset($_POST['opinion']))
{
// getting Post values
$name=$_POST['name'];
$message=$_POST['message'];
$isvisible=0;
// Insert query
$sql="INSERT INTO  opinion(FullName,Message,Is_Visible,PostingDate) VALUES(:fname,:message,:isvisible,NOW())";
$query = $db->prepare($sql);
// Bind parameters
$query->bindParam(':fname',$name,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':isvisible',$isvisible,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $db->lastInsertId();
if($lastInsertId)
{

echo "<script>alert('Votre message à été envoyé.');</script>";
}
else
{
echo "<script>alert('Erreur: veuillez recommencer.');</script>";
}
}

?>
