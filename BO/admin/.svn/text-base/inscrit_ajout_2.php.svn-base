<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<? include_once("_fonctions.php")?>
<?	
	$maintenant = date("Y-m-d H\:i\:s\ ");

	for ($k=1;$k<=4;$k++) {
		$rndo =  rand (0, 9);
		$motpasse .= $rndo;
	}
	$motpasse = md5($motpasse);
	
	$query  = "INSERT INTO mailing (date_creation, prenom, actif, ip, code, mail) VALUES (";
	$query .= "'  ". $maintenant ."' " ;
	$query .= ", '". $_POST["prenom"] ."' " ;
	if (isset($_POST["actif"])){
		$query .= ",1";
	}else{
		$query .= ",0";
	}
	$query .= ", 'admin' " ;
	$query .= ", '". $motpasse ."' " ;
	$query .= ", '". $_POST["mail"] ."' " ;
	$query .= ")";
	//echo $query ."<br>";
	$rstemp = mysql_query($query);
	$num_mailing = mysql_insert_id();
	
	header("Location: inscrit_modif.php?num_mailing=". $num_mailing);

?>
<? include_once("../include/_connexion_fin.php"); ?>