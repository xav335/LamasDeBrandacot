<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<?
	$aujourdhui = date("Y-m-d H:i:s");                         

	$query  = "DELETE FROM lien ";
	$query .= " WHERE id_lien=". $_GET["id_lien"];
	//echo $query ."<br>";
	$rstemp = mysql_query($query);
	
	$query  = "DELETE FROM media_lien ";
	$query .= " WHERE id_lien=". $_GET["id_lien"];
	//echo $query ."<br>";
	$rstemp = mysql_query($query);
	
	
	header("Location: lien_liste.php");
?>
<? include_once("../include/_connexion_fin.php"); ?>