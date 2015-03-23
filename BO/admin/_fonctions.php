<?
///////////////////////////////////
//Choix de la langue d'affichage //
///////////////////////////////////
//setlocale ("LC_TIME", "fr");
setlocale (LC_ALL, 'fr_FR');

function diff_date_en_jours($date_a_traiter){ 
	$annee = substr($date_a_traiter, 0, 4); 
	$mois = substr($date_a_traiter, 5, 2); 
	$jour = substr($date_a_traiter, 8, 2); 
	
	$heure = substr($date_a_traiter, 11, 2); 
	$minute = substr($date_a_traiter, 14, 2); 
	$seconde = substr($date_a_traiter, 17, 2); 
	$date_a_traiter=mktime ($heure,$minute,$seconde,$mois,$jour,$annee);
	# secondes 
	$diff = time() - $date_a_traiter;
	$d = $diff % 60;
	$secx = $d;
	# minutes
	$diff = intval(($diff - $d) / 60); 
	$d = $diff % 60; 
	$minx = $d ;
	# heures
	$diff = intval(($diff - $d) / 60); 
	$d = $diff % 24; 
	$heux = $d ;	
	# jours		
	$diff = intval(($diff - $d) / 24); 
	$d = $diff; 
	$joux = $d;														
	//$chaine = $joux ."jou ". $heux ."heu ". $minx ."min ". $secx ."sec";
	return $joux;
}


function format_date($thedate){

	//list($mois,$jour,$annee)=split("-",$thedate);
	/*$arr=split("-",$thedate);
  	foreach ($arr as $value) {
    	echo "<br>Valeur: $value<br>\n";
  	}*/
	if ($thedate!=0){	
		$annee = substr($thedate, 0, 4); 
		$mois = substr($thedate, 5, 2); 
		$jour = substr($thedate, 8, 2); 
		
		$heure = substr($thedate, 11, 2); 
		$minute = substr($thedate, 14, 2); 
		$seconde = substr($thedate, 17, 2); 
		
		$ladate=mktime ($heure,$minute,$seconde,$mois,$jour,$annee);
		
		//echo "heure: $heure; minute: $minute; Annee: $annee<br>\n";
	
		//$ladate=date("d/m/Y ", $ladate);
		$ladate=date("d-m-Y H\:i\:s\ ", $ladate);
		return $ladate;
	}else{
		return "-----&nbsp;";
	}
}

function format_date_ss_heure($thedate){

	//list($mois,$jour,$annee)=split("-",$thedate);
	/*$arr=split("-",$thedate);
  	foreach ($arr as $value) {
    	echo "<br>Valeur: $value<br>\n";
  	}*/
	if ($thedate!=0){	
		$annee = substr($thedate, 0, 4); 
	
		$mois = substr($thedate, 5, 2); 
			
		$jour = substr($thedate, 8, 2); 
	
		$heure = substr($thedate, 11, 2); 
		
		$minute = substr($thedate, 14, 2); 
		$seconde = substr($thedate, 17, 2); 
		
		$ladate=mktime ($heure,$minute,$seconde,$mois,$jour,$annee);
		//$ladate=mktime (0,0,0,$mois,$jour,$annee);
		//echo "heure: $heure; minute: $minute; jour: $jour; mois: $mois; Annee: $annee<br>\n";
		//echo date("M-d-Y", mktime (0,0,0,11,30,1964)) ."<br>";

		//$ladate=date("d/m/Y", $ladate);
		$ladate=date("d-m-Y ", $ladate);
		
		return $ladate;
	}else{
		return "&nbsp;";
	}
}


function format_date_anniversaire($thedate){

	//list($mois,$jour,$annee)=split("-",$thedate);
	/*$arr=split("-",$thedate);
  	foreach ($arr as $value) {
    	echo "<br>Valeur: $value<br>\n";
  	}*/
	if ($thedate!=0 && $thedate!=null){	
		$annee = substr($thedate, 0, 4); 
	
		$mois = substr($thedate, 5, 2); 
			
		$jour = substr($thedate, 8, 2); 
	
		$heure = substr($thedate, 11, 2); 
		
		$minute = substr($thedate, 14, 2); 
		$seconde = substr($thedate, 17, 2); 
		
		$ladate=mktime ($heure,$minute,$seconde,$mois,$jour,$annee);
		//$ladate=mktime (0,0,0,$mois,$jour,$annee);
		//echo "heure: $heure; minute: $minute; jour: $jour; mois: $mois; Annee: $annee<br>\n";
		//echo date("M-d-Y", mktime (0,0,0,11,30,1964)) ."<br>";

		//$ladate=date("d/m/Y", $ladate);
		//$ladate=date("d-m-Y ", $ladate);
		
		return "$jour-$mois-$annee";;
	}else{
		return "&nbsp;";
	}
}

function traitement_image($url_img) {
	for ($k=1;$k<=5;$k++) {
		$rndo =  rand (0, 9);
		$motpasse .= $rndo;
	}
	//formatage de l'image
	$url_img = str_replace("é","e",$url_img);
	$url_img = str_replace("è","e",$url_img);
	$url_img = str_replace("à","a",$url_img);
	$url_img = str_replace("ù","u",$url_img);
	$url_img = str_replace("û","u",$url_img);
	$url_img = str_replace("ô","o",$url_img);
	$url_img = str_replace(" ","_",$url_img);
	$url_img = str_replace("'","_",$url_img);
	$url_img = str_replace("!","_",$url_img);
	$url_img = str_replace("&","_",$url_img);
	$url_img = str_replace("+","_",$url_img);	
	$url_img = str_replace("(","_",$url_img);
	$url_img = str_replace(")","_",$url_img);
	$url_img = str_replace("#","_",$url_img);	
	$url_img = str_replace("[","_",$url_img);
	$url_img = str_replace("]","_",$url_img);
	$url_img = str_replace("}","_",$url_img);	
	$url_img = str_replace("{","_",$url_img);	
	$url_img = str_replace("~","_",$url_img);	
	//construction du nom du fichier image pour qu'il soit unique
	$url_img = substr($url_img, 0, strpos($url_img,'.')). $motpasse . strrchr($url_img,"."); 
	//on met en minuscule
	$url_img = strtolower($url_img);
	return $url_img;
}	

function sendMail($dest,$subject,$body,$head) {
	
	return mail($dest,$subject,$body,$head);
	
}
?>