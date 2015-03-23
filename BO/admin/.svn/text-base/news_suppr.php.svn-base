<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<?
	$aujourdhui = date("Y-m-d H:i:s");                         

	$query  = "DELETE FROM news ";
	$query .= " WHERE id_news=". $_GET["id_news"];
	//echo $query ."<br>";
	$rstemp = mysql_query($query);
	
	$query  = "DELETE FROM media_news ";
	$query .= " WHERE id_news=". $_GET["id_news"];
	//echo $query ."<br>";
	$rstemp = mysql_query($query);
	
	
	header("Location: news_liste.php");
?>
<? include_once("../include/_connexion_fin.php"); ?>