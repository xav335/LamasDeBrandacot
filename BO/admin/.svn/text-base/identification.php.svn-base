<?php include_once("../include/_connexion.php"); ?>
<?php include_once("../include/_session.php"); ?>
<?
// ------- on regarde si on affiche ounpas le ticker  ----------//
$ChaineSQL = "SELECT * FROM admin WHERE login='". $_POST["login"] ."' AND mdp='". $_POST["mdp"] ."'";
 //echo $ChaineSQL;
 $result = mysql_query($ChaineSQL);
 $_SESSION["authentification"] = 0;
 if (mysql_num_rows($result) > 0) {
 	$_SESSION["authentification"] = 1;
	header("Location: accueil.php");
 }else{ 
	 header("Location: index.php?ident=1");
 }
?>
<?php include_once("../include/_connexion_fin.php"); ?>