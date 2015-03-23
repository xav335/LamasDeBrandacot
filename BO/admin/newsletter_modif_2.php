<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<? include_once("_fonctions.php")?>
<?	

	$query  = "UPDATE newsletter ";
	$query .= "Set titre='". $_POST["titre"] ."' " ;
	$query .= ", texte='". $_POST["texte"] ."' " ;
	$query .= ", titre_bas='". $_POST["titre_bas"] ."' " ;
	$query .= " WHERE num_newsletter=1";
	//echo $query ."<br>";
	$rstemp = mysql_query($query);

	header("Location: newsletter_modif.php");

?>
<? include_once("../include/_connexion_fin.php"); ?>