<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? // Mailing list PHP & MySQL - 1.1
include_once("_mail.php");
include_once("../include/_connexion.php"); 
/*
$CookMail = "asphp_liste_pm";
if($EMail) setcookie($CookMail,$EMail,time()+86400*365);
if($desab) setcookie($CookMail);
*/

?>
<HTML><HEAD><TITLE>Mailing List</TITLE>
   <link href="../include/styles_admin.css" rel="stylesheet" type="text/css">

   <script language="JavaScript"><!--
      function verif(email) {
         var arobase = email.indexOf("@"); var point = email.lastIndexOf(".")
         if((arobase < 3)||(point + 2 > email.length)||(point < arobase+3)) return false
         return true
         }
   //--></script>
</HEAD>
<BODY>
<? 
if ($_POST["sorte"]=="test") {
	
	$prenom_test = "Javier";
	$nom_test = "Gonzalez";
	$mailto = "admin@iconeo.fr,admin@elevagelama.com";
   				
	$body = "Bonjour ". $prenom_test .", <br>";	
	$body .= nl2br($_POST["corps"]) ."<br><br><br>";
	$body .= "<a href=\"http://". getenv("SERVER_NAME") ."/NL-unscription.php?email=". $mailto ."&id=". "333333" ."\">D�-inscription � la newsletter de ElevageLama.com</a>";
	$k+=1;

	sendLibMailHtml($_POST["EMail"], $mailto, $_POST["sujet"], $body);
	echo $mailto ." envoy� !<br>";

}else{

   $query = "SELECT * FROM  mailing WHERE actif=1"; 
   $result = mysql_query($query); 
   if(mysql_numrows($result) > 0) {
   
      $k=0;
		while (($val = mysql_fetch_array($result))&&($message=="")) {
			$mailto = $val["mail"];
			$body = "Bonjour ". $val["prenom"] .", <br>";	
			$body .= nl2br($_POST["corps"]) ."<br><br><br>";
			$body .= "<a href=\"http://". getenv("SERVER_NAME") ."/NL-unscription.php?email=". $mailto ."&id=". $val["code"] ."\">D�-inscription � la newsletter de ElevageLama.com</a>";
			$k+=1;
			$mailto = $val["mail"];
			if(eregi("^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$", $mailto))
			{ 
				sendLibMailHtml($_POST["EMail"], $mailto, $_POST["sujet"], $body);
				echo $mailto ." envoy� !<br>";
			}else{	
				echo "ERREUR (mail invalide) = ". $mailto ."<br>";
			}
		}
   }
}
?>
  
</BODY></HTML>
<? include_once("../include/_connexion_fin.php"); ?>