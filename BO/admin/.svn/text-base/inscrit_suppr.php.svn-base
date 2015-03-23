<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<?
	
	$query  = "DELETE FROM mailing ";
	$query .= " WHERE num_mailing=". $_GET["num_mailing"];
	$rstemp = mysql_query($query);
	
	header("Location: inscrit_liste.php");
?>
<? include_once("../include/_connexion_fin.php"); ?>