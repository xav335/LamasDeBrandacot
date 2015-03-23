<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<?
	
	$query  = "DELETE FROM media_news ";
	$query .= " WHERE id_media_news=". $_GET["id_media_news"];
	$rstemp = mysql_query($query);
	
	header("Location: media_liste_news.php?id_news=". $_GET["id_news"]);
?>
<? include_once("../include/_connexion_fin.php"); ?>