<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<?
	$aujourdhui = date("Y-m-d H:i:s");                         

	$query  = "DELETE FROM lama ";
	$query .= " WHERE id_lama=". $_GET["id_lama"];
	//echo $query ."<br>";
	$rstemp = mysql_query($query);
	
	$query  = "DELETE FROM media_lama ";
	$query .= " WHERE id_lama=". $_GET["id_lama"];
	//echo $query ."<br>";
	$rstemp = mysql_query($query);
	
	
	header("Location: lama_liste.php");
?>
<? include_once("../include/_connexion_fin.php"); ?>