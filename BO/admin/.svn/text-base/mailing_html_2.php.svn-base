<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? // Mailing list PHP & MySQL - 1.1
include_once("_mail.php");
include_once("../include/_connexion.php"); 

// SITE EN TEST
//$chemin_url = getenv("SERVER_NAME") ."/prod";
$chemin_url = getenv("SERVER_NAME");


$sql = "SELECT * FROM  newsletter ";
$sql .= " WHERE num_newsletter=1";
$result = mysql_query($sql);
$nb_enr = mysql_num_rows($result);

if ($nb_enr>0){
	while ($row = mysql_fetch_array($result)) { 
		$titre = $row["titre"];
		$texte =  $row["texte"];
		$titre_bas =  $row["titre_bas"];
	}
}

?>
<HTML>
	<HEAD>
		<TITLE>Mailing List</TITLE>
		<link href="../include/styles_admin.css" rel="stylesheet" type="text/css">
		
		<script language="JavaScript">
		<!--
			function verif(email) {
				var arobase = email.indexOf("@"); var point = email.lastIndexOf(".")
				if((arobase < 3)||(point + 2 > email.length)||(point < arobase+3)) return false
				return true
			}
		//-->
		</script>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
		<!--
			body {
				margin-left: 0px;
				margin-top: 0px;
				margin-right: 0px;
				margin-bottom: 0px;
			}
		-->
		</style>
	</HEAD>
<BODY>
<? 
	

if ($_POST["sorte"]=="test") {
	$prenom_test = "Javier";
	$nom_test = "Gonzalez";
	$mailto = "admin@iconeo.fr,admin@flevagelama.com";
   				
			$body  = "<HTML>";
			$body .= "<HEAD>";
			$body .= "<TITLE>Newsletter ElevageLama.com</TITLE>";
			$body .= "<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=iso-8859-1\">";
			$body .= "</HEAD>";
			$body .= "<BODY style=\"background-color: #1C253E\" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>";
			$body .= "<TABLE WIDTH=1 BORDER=0 CELLPADDING=0 CELLSPACING=0>";
			$body .= "	<TR>";
			$body .= "		<TD><IMG SRC=\"http://www.chateaumontjouan.com/newsletter/ChateauMontjouan-2-int_02.gif\" WIDTH=556 HEIGHT=221 ALT=\"\"></TD>";
			$body .= "		<TD><IMG SRC=\"http://www.chateaumontjouan.com/newsletter/ChateauMontjouan-2-int_03.gif\" WIDTH=258 HEIGHT=221 ALT=\"\"></TD>";
			$body .= "	</TR>";
			$body .= "	<TR>";
			$body .= "		<TD colspan=\"2\"  valign=\"middle\" style=\"color: #6D727F;font-weight: bold;font-size: 18px;font-family: verdana; padding-bottom: 22px; padding-left: 10px;padding-top: 15px;\">";
			$body .= "		 	". nl2br($titre)."";
			$body .= "		</TD>";
			$body .= "	</TR>";
			$body .= "	<TR>";
			$body .= "		<TD valign=\"top\" style=\"color: #6D727F;font-weight: bold;font-size: 12px;font-family: verdana; padding-bottom: 22px; padding-left: 10px;padding-top: 20px;padding-right: 20px;\">";
			$body .= "				Bonjour ". $prenom_test .",<br>". nl2br($texte)." ";
			$body .= "		</TD>";
			$body .= "		<TD align=\"center\" valign=\"top\"><IMG SRC=\"http://www.chateaumontjouan.com/newsletter/ChateauMontjouan-2-int_11.gif\" height=\"260\"  ALT=\"\"></TD>";
			$body .= "	</TR>";
			$body .= "	<TR>";
			$body .= "		<TD colspan=\"2\"  valign=\"bottom\" style=\"color: #6D727F;font-weight: bold;font-size: 14px;font-family: verdana;padding-left: 33px; padding-top: 33px;\">";
			$body .= "			". nl2br($titre_bas)."";
			$body .= "		</TD>";
			$body .= "	</TR>";
			$body .= "	<TR>";
			$body .= "		<TD>";
			$body .= "			<IMG SRC=\"http://www.chateaumontjouan.com/newsletter/ChateauMontjouan-2-int_18.gif\" WIDTH=556 HEIGHT=116 ALT=\"\"></TD>";
			$body .= "		<TD>";
			$body .= "			<IMG SRC=\"http://www.chateaumontjouan.com/newsletter/ChateauMontjouan-2-int_19.gif\" WIDTH=258 HEIGHT=116 ALT=\"\"></TD>";
			$body .= "	</TR>";
			$body .= "</TABLE>";
			$body .= "</BODY>";
			$body .= "</HTML>";
			$body .= "<a href=\"http://". getenv("SERVER_NAME") ."/NL-unscription.php?email=". $mailto ."&id=". "6666666" ."\">D�-inscription � la newsletter de ElevageLama.com</a>";
			
			//decommenter pour envoyer
			sendLibMailHtml($_POST["EMail"],$mailto,$_POST["sujet"],$body);
			echo $body ."<br><br>";
      echo "<h1>Newsletters envoy�es !!!! </h1><br><br>";
}

// c'est le vrai envoi
else {
	 $query2 = "SELECT * FROM  mailing WHERE actif=1"; 
   $result = mysql_query($query2); 
   if(mysql_numrows($result) > 0) {
   
      $k=0;
		while (($val = mysql_fetch_array($result))&&($message=="")) {
			$mailto = $val["mail"];
			
			$body  = "<HTML>";
			$body .= "<HEAD>";
			$body .= "<TITLE>Newsletter ElevageLama.com</TITLE>";
			$body .= "<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=iso-8859-1\">";
			$body .= "</HEAD>";
			$body .= "<BODY style=\"background-color: #1C253E\" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>";
			$body .= "<TABLE WIDTH=1 BORDER=0 CELLPADDING=0 CELLSPACING=0>";
			$body .= "	<TR>";
			$body .= "		<TD><IMG SRC=\"http://www.chateaumontjouan.com/newsletter/ChateauMontjouan-2-int_02.gif\" WIDTH=556 HEIGHT=221 ALT=\"\"></TD>";
			$body .= "		<TD><IMG SRC=\"http://www.chateaumontjouan.com/newsletter/ChateauMontjouan-2-int_03.gif\" WIDTH=258 HEIGHT=221 ALT=\"\"></TD>";
			$body .= "	</TR>";
			$body .= "	<TR>";
			$body .= "		<TD colspan=\"2\"  valign=\"middle\" style=\"color: #6D727F;font-weight: bold;font-size: 18px;font-family: verdana; padding-bottom: 22px; padding-left: 10px;padding-top: 15px;\">";
			$body .= "		 	". nl2br($titre)."";
			$body .= "		</TD>";
			$body .= "	</TR>";
			$body .= "	<TR>";
			$body .= "		<TD valign=\"top\" style=\"color: #6D727F;font-weight: bold;font-size: 12px;font-family: verdana; padding-bottom: 22px; padding-left: 10px;padding-top: 20px;padding-right: 20px;\">";
			$body .= "				Bonjour ". $val["prenom"] .",<br>". nl2br($texte)." ";
			$body .= "		</TD>";
			$body .= "		<TD align=\"center\" valign=\"top\"><IMG SRC=\"http://www.chateaumontjouan.com/newsletter/ChateauMontjouan-2-int_11.gif\" height=\"260\" ALT=\"\"></TD>";
			$body .= "	</TR>";
			$body .= "	<TR>";
			$body .= "		<TD colspan=\"2\"  valign=\"bottom\" style=\"color: #6D727F;font-weight: bold;font-size: 14px;font-family: verdana;padding-left: 33px; padding-top: 33px;\">";
			$body .= "			". nl2br($titre_bas)."";
			$body .= "		</TD>";
			$body .= "	</TR>";
			$body .= "	<TR>";
			$body .= "		<TD>";
			$body .= "			<IMG SRC=\"http://www.chateaumontjouan.com/newsletter/ChateauMontjouan-2-int_18.gif\" WIDTH=556 HEIGHT=116 ALT=\"\"></TD>";
			$body .= "		<TD>";
			$body .= "			<IMG SRC=\"http://www.chateaumontjouan.com/newsletter/ChateauMontjouan-2-int_19.gif\" WIDTH=258 HEIGHT=116 ALT=\"\"></TD>";
			$body .= "	</TR>";
			$body .= "</TABLE>";
			$body .= "</BODY>";
			$body .= "</HTML>";
			$body .= "<a href=\"http://". getenv("SERVER_NAME") ."/NL-unscription.php?email=". $mailto ."&id=". $val["code"] ."\">D�-inscription � la newsletter de ElevageLama.com</a>";
			$k+=1;
			if(eregi("^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$", $mailto))
			{ 
				sendLibMailHtml($_POST["EMail"], $mailto, $_POST["sujet"], $body);
				echo $mailto ." envoy� !<br>";
			}else{	
				echo "ERREUR (mail invalide) = ". $mailto ."<br>";
			}
			
      	}
   }
	//echo $body ."<br><br>";
	echo "<h1>Newsletters envoy�es Fin!!!! </h1><br><br>";}


 ?>
  
</BODY></HTML>
<? include_once("../include/_connexion_fin.php"); ?>