<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<? include_once("_fonctions.php")?>
<?	
	$date_debut=mktime ("00","00","00",$_POST["mois_debut"],$_POST["jour_debut"],$_POST["an_debut"]);
	$date_debut=date("Y/m/d H:i:s", $date_debut);
	$date_fin=mktime ("23","59","59",$_POST["mois_fin"],$_POST["jour_fin"],$_POST["an_fin"]);
	$date_fin=date("Y/m/d H:i:s", $date_fin);

	$query  = "INSERT INTO remise (date_debut, date_fin,pourcentage ,bon_achat ";
	$query .= ",minimum_commande ,frais_port_fr ,frais_port_ext,cadeau ,cadeau_en ,code) VALUES (";
	$query .= "'  ". $date_debut ."' " ;
	$query .= ", '". $date_fin ."' " ;
	$query .= ",  ". str_replace(",",".",$_POST["pourcentage"])." " ;
	$query .= ",  ". str_replace(",",".",$_POST["bon_achat"]) ." " ;
	$query .= ",  ". str_replace(",",".",$_POST["minimum_commande"]) ." " ;
	$query .= ",  ". str_replace(",",".",$_POST["frais_port_fr"]) ." " ;
	$query .= ",  ". str_replace(",",".",$_POST["frais_port_ext"]) ." " ;
	$query .= ", '". $_POST["cadeau"] ."' " ;
	$query .= ", '". $_POST["cadeau_en"] ."' " ;
	$query .= ", '". $_POST["code"] ."' " ;
	$query .= ")";
	//echo $query ."<br>";
	$rstemp = mysql_query($query);
	$num_remise = mysql_insert_id();
	
	header("Location: remise_modif.php?num_remise=". $num_remise);

?>
<? include_once("../include/_connexion_fin.php"); ?>