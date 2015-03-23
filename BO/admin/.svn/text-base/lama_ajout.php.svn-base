<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<?
	$date_debut = date("Y-m-d H\:i\:s\ ");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>cts</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../include/styles_admin.css" rel="stylesheet" type="text/css">
<script Language="JavaScript">
function Form1_Validator(theForm){
	
	 if (theForm.description.value == ""){
    	alert("Veuillez saisir une description.");
	    theForm.description.focus();
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
		<table width="84%" border="0" cellpadding="10" cellspacing="0" align="center">
        <form action="lama_ajout_2.php" method="post" name="formulaire"  onsubmit="return Form1_Validator(this)" enctype="application/x-www-form-urlencoded">
        	<input type="hidden" name="id_collecte" value="<? echo $id_collecte?>">
        	<tr>
            		<td align="center" id="texte3">Ajout d'un lama</td>
        	</tr>
        	<tr> 
        		<td align="center" id="texte3_blanc"><br> <img src="../images/pixel_rouge.jpg" width="110%" height="1"></td>
         	</tr>
         	<tr> 
				<td>
					<table  border="0" cellspacing="0" >
					<tr> 
						<td> 
								<table  border="0" cellspacing="0" align="center">
								<?
								$annee = substr($date_debut, 0, 4); 
								$mois = substr($date_debut, 5, 2); 
								$jour = substr($date_debut, 8, 2); 
								?>
								<tr > 
								  <td width="1%" id="texte2b" >Date de naissance&nbsp;&nbsp;:&nbsp;</td>
								  <td valign="top"> 
									<SELECT NAME="jour_debut">
									  <? for ($i=1;$i<=31;$i++) { ?>
									  <? if ($jour == $i) { ?>
									  <OPTION VALUE=<? echo $i ?> SELECTED> 
									  <? echo $i ?>
									  </OPTION>
									  <? }else{  ?>
									  <OPTION VALUE=<? echo $i ?>> 
									  <? echo $i ?>
									  </OPTION>
									  <? } ?>
									  <? } ?>
									</SELECT>
									/ 
									<SELECT NAME="mois_debut">
									  <? for ($i=1;$i<=12;$i++) { ?>
									  <? if ($mois == $i) { ?>
									  <OPTION VALUE=<? echo $i ?> SELECTED> 
									  <? echo $i ?>
									  </OPTION>
									  <? }else{  ?>
									  <OPTION VALUE=<? echo $i ?> > 
									  <? echo $i ?>
									  </OPTION>
									  <? } ?>
									  <? } ?>
									</SELECT>
									/ 
									<SELECT NAME="an_debut">
									  <? for ($i=2009;$i<=2018;$i++) { ?>
									  <? If ($annee == $i) { ?>
									  <OPTION VALUE=<? echo $i ?>  SELECTED> 
									  <? echo $i ?>
									  </OPTION>
									  <? }else{  ?>
									  <OPTION VALUE=<? echo $i ?> > 
									  <? echo $i ?>
									  </OPTION>
									  <? } ?>
									  <? } ?>
									</SELECT>
								  </td>
								</tr>
								</table>
						</td>
						
					</tr>
					</table>
				</td>
			</tr>		
			<tr> 
                  <td> <table cellspacing="0" cellpadding="0" border="0">
                      <tr> 
                        <td id="texte2b">description:<br> <br> 
                          	<?
								//$tranche_horaire = str_replace("\'","'",$tranche_horaire);
								$tranche_horaire = htmlspecialchars($tranche_horaire);
							?>
                          <textarea cols="80" rows="7" name="description" wrap="soft"><? echo htmlspecialchars($tranche_horaire) ?></textarea> 
                        </td>
                      </tr>
                    </table></td>
			</tr>
			
			
         	<tr> 
        		<td align="center" id="texte3_blanc"><br> <img src="../images/pixel_rouge.jpg" width="110%" height="1"></td>
         	</tr>
          	<tr> 
            	<td> 
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
                	<tr> 
                  		<td align="center"> <input type="button" value="retour à la liste" onclick="javascript:document.location.href='collecte_liste.php'"> </td>
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