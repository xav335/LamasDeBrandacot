<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<? include_once("_fonctions.php"); ?>
<?
$sql = "SELECT * ";
$sql .= " FROM  mailing ";
$sql .= " WHERE mailing.num_mailing=". $_GET["num_mailing"];
$result = mysql_query($sql);
$nb_enr = mysql_num_rows($result);
if ($nb_enr>0){
	while ($prod = mysql_fetch_array($result)) { 
		$num_mailing = $prod["num_mailing"];
		$prenom =  $prod["prenom"];
		$mail =  $prod["mail"];
		$date_creation =  $prod["date_creation"];
		$date_validation =  $prod["date_validation"];
		$date_desinscription =  $prod["date_desinscription"];
		$ip =  $prod["ip"];
		$ipvalidation =  $prod["ipvalidation"];
		$code =  $prod["code"];
		$actif =  $prod["actif"];
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>cts</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../include/styles_admin.css" rel="stylesheet" type="text/css">
<script Language="JavaScript">
function Form1_Validator(theForm){
	
	if (theForm.prenom.value == ""){
    	alert("Veuillez saisir un prénom.");
	    theForm.prenom.focus();
	    return (false);
	 }  
	
	 if (theForm.mail.value == ""){
    	alert("Veuillez saisir un mail.");
	    theForm.mail.focus();
	    return (false);
	 }  
	if (!est_mail(theForm.mail.value)){
    	alert("Veuillez saisir un mail correct.");
	    theForm.mail.focus();
	    return (false);
	 }  
	  
	  
	  return true;
	
}


function est_reel(le_nombre){	
	var nbex = le_nombre
	
	if (!isFinite(nbex)){
		x = nbex.indexOf(',')
	
		entier = nbex.slice(0,x)
		decimale = nbex.slice(x+1,100)
		nombre = entier + '.' + decimale
	}else{
		nombre = nbex;
	}
	
	if (isFinite(nombre)){
		 estreel = true
	}else{
		estreel = false
	}
	return (estreel);
}

function est_entier(le_nombre){
	var checkOK = "0123456789-";
	var checkStr = le_nombre;
	var allValid = true;
	var decPoints = 0;
	var allNum = "";
	for (i = 0;  i < checkStr.length;  i++)
	{
	    ch = checkStr.charAt(i);
	    for (j = 0;  j < checkOK.length;  j++)
	      if (ch == checkOK.charAt(j))
	        break;
	    if (j == checkOK.length)
	    {
	      allValid = false;
	      break;
	    }
	    allNum += ch;
	}
	if (!allValid){
		return (false);
	}else{
		return (true);
	}
}	  

function valide_inscription(){
	//if ((document.formulaire.nom.value!='') && (document.formulaire.prenom.value!='')) {
		wLoader('valide_adhesion.php?email=' + escape(document.formulaire.email.value))		
	//}
	return false
}

var globWin;            
function wLoader(_URL)  
{	
	var _windowTitle="_blank";
	var _windowSettings="top=80,left=150,screenX=0,screenY=0,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=500,height=400";

	globWin = window.open(_URL,_windowTitle,_windowSettings);
}


function est_mail(chaine){
	if (chaine.search(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9]+)*$/) == -1){
		return false;
	}else{	
		return true;
	}
}
</script>
</head>
<body id="fond_gris" leftmargin="0" topmargin="0" bgproperties="fixed" id="fond_rose" border="0">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td align="center" valign="middle">
		<table width="90%" border="0" cellpadding="10" cellspacing="0" align="center">
        <form action="inscrit_modif_2.php" method="post" name="formulaire"  onsubmit="return Form1_Validator(this)" enctype="application/x-www-form-urlencoded">
        	<input type="hidden" name="num_mailing" value="<? echo $num_mailing?>">
        	<tr>
            		<td align="center" id="texte3">Modification Inscription</td>
        	</tr>
        	<tr> 
        		<td align="center" id="texte3_blanc"><br> <img src="../images/pixel_rouge.jpg" width="110%" height="1"></td>
         	</tr>
         	
			<tr> 
            	<td> 
					<table width="100%" border="0" cellpadding="2" cellspacing="0">
	                <tr> 
	                  	<td  height="30" id="texte2b">Prénom :&nbsp;&nbsp;
	                  		<input size="50"  name="prenom" type="text" value="<? echo htmlspecialchars($prenom)?>"></td>
	                </tr>
	              	</table>
				</td>
          	</tr>
          	<tr> 
            	<td> 
					<table width="100%" border="0" cellpadding="2" cellspacing="0">
	                <tr> 
	                  	<td  height="30" id="texte2b">Email :&nbsp;&nbsp;
	                  		<input size="70"  name="mail" type="text" value="<? echo htmlspecialchars($mail)?>"></td>
	                </tr>
	              	</table>
				</td>
          	</tr>
			<tr> 
                  <td> 
                  	<table width="100%" border="0" cellpadding="2" cellspacing="0">
	                <tr> 
	                  	<td  height="30" id="texte2b"><b>Date Création :</b>&nbsp;&nbsp;<? echo format_date($date_creation)?></td>
	                  	<td  height="30" id="texte2b"><b>Ip :</b>&nbsp;&nbsp;<a target="_BLANK" href="http://whois.domaintools.com/<? echo $ip ?>"><? echo $ip?></a></td>
	                </tr>
	                <tr> 
	                  	<td  height="30" id="texte2b"><b>Date validation  :</b>&nbsp;&nbsp;<? echo format_date($date_validation)?></td>
	                	<td  height="30" id="texte2b"><b>Ip validation :</b>&nbsp;&nbsp;<a target="_BLANK" href="http://whois.domaintools.com/<? echo $ipvalidation ?>"><? echo $ipvalidation ?></a></td>
	                </tr>
	                <tr> 
	                  	<td  height="30" id="texte2b"><b>Date dé-inscription :</b>&nbsp;&nbsp;<? echo $date_desinscription?></td>
	                  	<td  height="30" id="texte2b"><b>Code :</b>&nbsp;&nbsp;<? echo $code?></td>
	                </tr>
	              	</table>
                  </td>
			</tr>
			<tr> 
            	<td>
					<table  border="0" cellpadding="2" cellspacing="0">
					<tr> 
						<td  height="30" id="texte2b">Email actif :&nbsp;&nbsp;
							
						</td>
						<? if ($actif) { ?>
							<td  height="30" align="center" ><input name="actif" type="checkbox" value="" checked></td>
						<? }else{  ?>
							<td  height="30"  align="center"><input name="actif" type="checkbox" value="" ></td>
						<? }?>
					</tr>
					</table>
				</td>
          	</tr>
         	<tr> 
        		<td align="center" id="texte3_blanc"><br> <img src="../images/pixel_rouge.jpg" width="110%" height="1"></td>
         	</tr>
          	<tr> 
            	<td> 
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
                	<tr> 
                  		<td align="center"> <input type="button" value="retour à la liste" onclick="javascript:document.location.href='inscrit_liste.php'"> </td>
                  		<td align="center"> <input type="submit" name="vvv" value="Valider"> 
                  		</td>
                	</tr>
              		</table>
				</td>
          </tr>
		  
        </form>
      </table>
	</td>
  </tr>
</table>
</body>
</html>
<? include_once("../include/_connexion_fin.php"); ?>