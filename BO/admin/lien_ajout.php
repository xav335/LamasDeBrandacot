<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
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
        <form action="lien_ajout_2.php" method="post" name="formulaire"  onsubmit="return Form1_Validator(this)" enctype="application/x-www-form-urlencoded">
        	<input type="hidden" name="id_collecte" value="<? echo $id_collecte?>">
        	<tr>
            		<td align="center" id="texte3">Ajout d'un lien</td>
        	</tr>
        	<tr> 
        		<td align="center" id="texte3_blanc"><br> <img src="../images/pixel_rouge.jpg" width="110%" height="1"></td>
         	</tr>

			<tr> 
                  <td> <table cellspacing="0" cellpadding="0" border="0">
                      <tr> 
                        <td id="texte2b">libelle (tourisme, camping, hotelresto, chambrehote, gastronomie, chateauviti, transport):<br> <br> 
                          	<?
								$libelle = htmlspecialchars($libelle);
							?>
                          <textarea cols="80" rows="1" name="libelle" wrap="soft"><? echo htmlspecialchars($libelle) ?></textarea> 
                        </td>
                      </tr>
                    </table></td>
			</tr>
			
			<tr> 
                  <td> <table cellspacing="0" cellpadding="0" border="0">
                      <tr> 
                        <td id="texte2b">url:<br> <br> 
                          	<?
								$url = htmlspecialchars($url);
							?>
                          <textarea cols="80" rows="1" name="url" wrap="soft"><? echo htmlspecialchars($url) ?></textarea> 
                        </td>
                      </tr>
                    </table></td>
			</tr>
			
			<tr> 
                  <td> <table cellspacing="0" cellpadding="0" border="0">
                      <tr> 
                        <td id="texte2b">Description:<br> <br> 
                          	<?
								$description = htmlspecialchars($description);
							?>
                          <textarea cols="80" rows="5" name="description" wrap="soft"><? echo htmlspecialchars($description) ?></textarea> 
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