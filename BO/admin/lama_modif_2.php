<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<? include_once("_fonctions.php")?>
<?	

	$maintenant = date("Y-m-d H\:i\:s\ ");
	$date_debut=mktime ("00","00","00",$_POST["mois_debut"],$_POST["jour_debut"],$_POST["an_debut"]);
	$date_debut=date("Y/m/d H:i:s", $date_debut);
	
	$query  = "UPDATE lama ";
	$query .= "Set date_lama='". $date_debut ."' " ;
	$query .= ", description='". $_POST["description"] ."' " ;
	$query .= " WHERE id_lama=". $_POST["id_lama"];
	//echo $query ."<br>";
	$rstemp = mysql_query($query);

	header("Location: lama_modif.php?id_lama=". $_POST["id_lama"]);

?>
<? include_once("../include/_connexion_fin.php"); ?>