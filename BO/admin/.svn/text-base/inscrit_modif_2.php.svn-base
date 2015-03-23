<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<? include_once("_fonctions.php")?>
<?	

	
	$query  = "UPDATE mailing ";
	$query .= "Set prenom='". $_POST["prenom"] ."' " ;
	$query .= ", mail='". $_POST["mail"] ."' " ;
	if (isset($_POST["actif"])){
		$query .= ", actif=1";
	}else{
		$query .= ", actif=0";
	}
	$query .= " WHERE num_mailing=". $_POST["num_mailing"];
	//echo $query ."<br>";
	$rstemp = mysql_query($query);

	header("Location: inscrit_modif.php?num_mailing=". $_POST["num_mailing"]);

?>
<? include_once("../include/_connexion_fin.php"); ?>