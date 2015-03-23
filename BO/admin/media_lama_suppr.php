<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<?
	
	$query  = "DELETE FROM media_lama ";
	$query .= " WHERE id_media_lama=". $_GET["id_media_lama"];
	$rstemp = mysql_query($query);
	
	header("Location: media_liste_lama.php?id_lama=". $_GET["id_lama"]);
?>
<? include_once("../include/_connexion_fin.php"); ?>