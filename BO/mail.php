<?php
include_once("./include/libmail.php");


$mail=new Mail;
$mail->AutoCheck(false);

if ($_POST["nom"]!="")
{
	$mail->From($_POST['nom']." ".$_POST['prenom']." <".$_POST['email'].">");
}
else
{
	$mail->From("Contact site <".$_POST['email'].">");
}


$mail->To ("contact@elevagelama.com");
$mail->Bcc ("admin@iconeo.fr");
$demande = "contact";



$mail->Subject("Contact site");

$message="";
$message="Vous avez un message sur votre site ...\n\n";

if ($_POST["nom"] != "")
{
	$message=$message."Question pos�e par ".$_POST["nom"]."\n\n";
}

if ($_POST["email"] != "")
{
	$message=$message."Email : ".$_POST["email"]."\n\n";
}

if ($_POST["tel"] != "")
{
	$message=$message."T�l�phone : ".$_POST["tel"]."\n\n";
}


$message=$message."\n\n";
$message=$message."Message : ".$_POST["message"]."\n\n";


$mail->Body($message,"utf-8");
$mail->Format("text");
$mail->Priority(1);
$mail->Send();
$mail->Get();

echo "OK";
?>
