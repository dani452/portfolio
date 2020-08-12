<?php include 'securityForm.php'; ?>
<?php 

$sql ="SELECT emailId from tblemail";
$query = $db -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0){
foreach($results as $result){
$adminemail=$result->emailId;
};
};

if(isset($_POST['contact']))
{
// getting Post values
$name= valid_donnees($_POST['name']);
$phoneno=valid_donnees($_POST['phonenumber']);
$email=valid_donnees($_POST['emailaddres']);
$subject=valid_donnees($_POST['subject']);
$ms=valid_donnees($_POST['message']);
$isread=0;
// Insert query
$sql="INSERT INTO  tblcontactdata(FullName,PhoneNumber,EmailId,Subject,Message,PostingDate,Is_Read) VALUES(:fname,:phone,:email,:subject,:message,NOW(),:isread)";
$query = $db->prepare($sql);
// Bind parameters
$query->bindParam(':fname',$name,PDO::PARAM_STR);
$query->bindParam(':phone',$phoneno,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':message',$ms,PDO::PARAM_STR);
$query->bindParam(':isread',$isread,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $db->lastInsertId();
if($lastInsertId)
{
//mail function for sending mail

ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $email;
    $to = $adminemail;
    $message="<html></body><div>
    <div><b>Nom:</b> $name,</div>
    <div><b>Téléphone:</b> $phoneno,</div>
    <div><b>Email:</b> $email,</div><div style='padding-top:8px;'><b>Message : </b>$ms</div><div></div></body></html>";
    $headers = "MIME-Version: 1.0"."\r\n".'Content-type: text/html; charset=iso-8859-1'."\r\n"."De :" . $from."\r\n";
    mail($to,$subject,$message, $headers);


echo "<script>alert('Votre message à été envoyé.');</script>";
}
else
{
echo "<script>alert('Erreur: veuillez recommencer.');</script>";
}
}

?>
