<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<?
$sql = "SELECT * ";
$sql .= " FROM produit ";
$sql .= " WHERE produit.num_produit=". $_GET["num_produit"];
$result = mysql_query($sql);
$nb_enr = mysql_num_rows($result);
if ($nb_enr>0){
	while ($prod = mysql_fetch_array($result)) { 
		$num_produit = $prod["num_produit"];
		$reference =  $prod["reference"];
		$prix =  $prod["prix"];
		$designation =  $prod["designation"];
		$designation_en =  $prod["designation_en"];
		$vignette =  $prod["vignette"];
		$photo =  $prod["photo"];
		$num_marque =  $prod["num_marque"];
		$description =  $prod["description"];
		$description_en =  $prod["description_en"];
		$note =  $prod["note"];
		$note_en =  $prod["note_en"];
		$lot =  $prod["lot"];
		$promo_lot =  $prod["promo_lot"];
		$lib_lot =  $prod["lib_lot"];
		$lib_lot_en =  $prod["lib_lot_en"];
		$lib_flash1=  $prod["lib_flash1"];
		$lib_flash2=  $prod["lib_flash2"];
		$lib_flash1_en=  $prod["lib_flash1_en"];
		$lib_flash2_en=  $prod["lib_flash2_en"];
		$vente_flash =  $prod["vente_flash"];
		$visible =  $prod["visible"];
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>collants.fr - spécialiste du collant</title>
<link href="../include/collants_styles_admin.css" rel="stylesheet" type="text/css">
<script Language="JavaScript">
function Form1_Validator(theForm){
	
	 if (theForm.reference.value == ""){
    	alert("Veuillez saisir une référence.");
	    theForm.reference.focus();
	    return (false);
	 }  
	 if (theForm.designation.value == ""){
    	alert("Veuillez saisir une désignation.");
	    theForm.designation.focus();
	    return (false);
	 } 
	  if (!est_reel(theForm.prix.value)){
    	alert("Veuillez indiquez un format de prix valide");
	    theForm.prix.focus();
	    return (false);
	 } 
	 
	  if (!est_entier(theForm.lot.value)){
    	alert("Veuillez indiquez un nombre valide");
	    theForm.lot.focus();
	    return (false);
	 } 
	
	 
	 if (!est_reel(theForm.promo_lot.value)){
    	alert("Veuillez indiquez un format de prix valide");
	    theForm.promo_lot.focus();
	    return (false);
	 } 
	
	/* if (!checkMail(theForm.email.value)){
	    alert("Veuillez saisir votre email ou vérifier qu'il est valide.");
	    theForm.email.focus();
	    return (false);
	}	 */
		  
	 	//res = valide_inscription()
		//return false	 
	  
	  
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
	var _windowSettings="top=80,left=150,screenX=0,screenY=0,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=302,height=430";

	globWin = window.open(_URL,_windowTitle,_windowSettings);
}
var globWin;            
function wLoader2(_URL)  
{	
	var _windowTitle="_blank";
	var _windowSettings="top=80,left=150,screenX=0,screenY=0,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=200,height=300";

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
		<table width="64%" border="0" cellpadding="10" cellspacing="0" align="center">
        <form action="produit_modif_2.php" method="post" name="formulaire"  onsubmit="return Form1_Validator(this)" enctype="multipart/form-data">
        	<input type="hidden" name="num_produit" value="<? echo $num_produit?>">
			<tr> 
            	<td> 
				<table width="100%" border="0" cellpadding="2" cellspacing="0">
                <tr> 
					<td width="50%" height="30" id="texte2b">Marque :</td>
					<td width="25%" height="30" id="texte2b" align="center">Annuler&nbsp;Vente&nbsp;flash</td>
					<td width="25%" height="30" id="texte2b" align="center">Vente&nbsp;flash</td>
					<td width="25%" height="30" id="texte2b" align="center">Visible</td>
                  	<td id="texte2b" width="10%" height="30"> R&eacute;f&eacute;rence:</td>
                </tr>
                <tr> 
					<td height="30"> 
                    <?
						$query="SELECT * FROM marque ";
						$query.=" WHERE marque.actif =1 ";	
						$query.=" ORDER BY marque ";	
						$rstemp = mysql_query($query);
						$nb_enr = mysql_num_rows($rstemp);
					?>
                    <select name="num_marque" size="1">
                      <? while ($lstmarque = mysql_fetch_array($rstemp)) { ?>
                      <? if ($num_marque == $lstmarque["num_marque"]) { ?>
                      <option selected value="<? echo $lstmarque["num_marque"] ?>"><? echo $lstmarque["marque"] ?></option>
                      <? }Else{  ?>
                      <option value="<? echo $lstmarque["num_marque"] ?>"><? echo $lstmarque["marque"] ?></option>
                      <? } ?>
                      <? } ?>
                    </select><a href="marque_ajout.php"><img src="images/modifier_off.gif" alt="" width="13" height="13" border="0"></a> 
                  	</td>	
							<td  height="30"  align="center"><input name="del_vente_flash" type="checkbox" value="" ></td>
					<? if ($vente_flash) { ?>
						<td  height="30" align="center" ><input name="vente_flash" type="checkbox" value="" checked></td>
					<? }else{  ?>
						<td  height="30"  align="center"><input name="vente_flash" type="checkbox" value="" ></td>
					<? }?>
					<? if ($visible) { ?>
						<td  height="30" align="center" ><input name="visible" type="checkbox" value="" checked></td>
					<? }else{  ?>
						<td  height="30"  align="center"><input name="visible" type="checkbox" value="" ></td>
					<? }?>
                  	<td height="30"><input size="14"  name="reference" type="text" value="<? echo htmlspecialchars($reference)?>"></td>
                </tr>
              </table>
				</td>
          </tr>
        	<tr> 
            	<td> 
					<table width="100%" border="0" cellpadding="2" cellspacing="0">
	                <tr> 
	                  	<td width="26%" height="30" id="texte2b"><img src="images/frenchflag.gif" width="18" alt="" border="0"> Désignation :&nbsp;&nbsp;<input size="60"  name="designation" type="text" value="<? echo htmlspecialchars($designation)?>"></td>
	                </tr>
	              	</table>
				</td>
          	</tr>
			<tr> 
            	<td> 
					<table width="100%" border="0" cellpadding="2" cellspacing="0">
	                <tr> 
	                  	<td width="26%" height="30" id="texte2b"><img src="images/ukflag.gif" width="18" alt="" border="0"> Désignation :&nbsp;&nbsp;<input size="60"  name="designation_en" type="text" value="<? echo htmlspecialchars($designation_en)?>"></td>
	                </tr>
	              	</table>
				</td>
          	</tr>
          <tr> 
            <td> 
				<table width="100%" border="0" cellpadding="2" cellspacing="0">
                <tr> 
                  <td> <table cellspacing="0" cellpadding="0" border="0">
                      <tr> 
                        <td id="texte2b"><img src="images/frenchflag.gif" width="18" alt="" border="0">Description:<br> <br> 
                          	<?
								//$description = str_replace("\'","'",$description);
								$description = htmlspecialchars($description);
							?>
                          <textarea cols="40" rows="5" name="description" wrap="soft"><? echo htmlspecialchars($description) ?></textarea> 
                        </td>
                      </tr>
                    </table></td>
                  <td width="15">&nbsp;</td>
                  <td valign="top"> <table cellspacing="0" cellpadding="0" border="0">
                      <tr> 
                        <td id="texte2b"><img src="images/frenchflag.gif" width="18" alt="" border="0">Note:<br> <br> 
                          	<?
								//$note = str_replace("\'","'",$note);
								$note = htmlspecialchars($note);
							?>
                          <textarea cols="40" rows="5" name="note" wrap="soft"><? echo htmlspecialchars($note) ?></textarea> 
                        </td>
                      </tr>
                    </table></td>
                </tr>
              </table>
			</td>
          </tr>
		  <tr> 
            <td> 
				<table width="100%" border="0" cellpadding="2" cellspacing="0">
                <tr> 
                  <td> 
				  	  <table cellspacing="0" cellpadding="0" border="0">
                      <tr> 
                        <td id="texte2b"><img src="images/ukflag.gif" width="18" alt="" border="0">Description:<br> <br> 
                          <textarea cols="40" rows="5" name="description_en" wrap="soft"><? echo htmlspecialchars($description_en) ?></textarea> 
                        </td>
                      </tr>
                      </table></td>
                  <td width="15">&nbsp;</td>
                  <td valign="top"> <table cellspacing="0" cellpadding="0" border="0">
                      <tr> 
                        <td id="texte2b"><img src="images/ukflag.gif" width="18" alt="" border="0">Note:<br> <br> 
                          	 <textarea cols="40" rows="5" name="note_en" wrap="soft"><? echo htmlspecialchars($note_en) ?></textarea> 
                        </td>
                      </tr>
                    </table></td>
                </tr>
              </table>
			</td>
          </tr>
          <tr> 
            <td> 
				<table width="100%" border="0" cellpadding="2" cellspacing="10" bgcolor="#999999">
                <tr> 
                  <td width="348"> 
                    <? if ($vignette != "") { ?>
                    <table cellspacing="0" cellpadding="0" border="0">
                      <tr> 
                        <td id="texte2b">Vignette actuelle :</td>
                        <td width="10">&nbsp;</td>
                        <td> <a href="javascript:wLoader2('/photo/petite/<? echo $vignette ?>')"><img src="/photo/petite/<? echo $vignette ?>" alt="" width="70" border="0"></a> 
                        </td>
                      </tr>
                    </table>
                    <? } ?>
                  </td>
                  <td width="10">&nbsp;</td>
                  <td width="615"> 
                    <? if ($photo != "") { ?>
                    <table cellspacing="0" cellpadding="0" border="0">
                      <tr> 
                        <td id="texte2b">Photo actuelle :</td>
                        <td width="10">&nbsp;</td>
                        <td> <a href="javascript:wLoader('/photo/grande/<? echo $photo ?>')"><img src="/photo/grande/<? echo $photo ?>" alt="" width="70" border="0"></a> 
                        </td>
                      </tr>
                    </table>
                    <? } ?>
                  </td>
                </tr>
                <tr> 
                  <td height="30"> <table cellspacing="0" cellpadding="0" border="0">
                      <tr> 
                        <td id="texte2b">Vignette:<br>(105x142)</td>
                        <td width="10">&nbsp;</td>
                        <td><input type="file" name="LE_FICHIER[]"></td>
                      </tr>
                    </table></td>
                  <td width="10" height="30">&nbsp;</td>
                  <td height="30"> <table cellspacing="0" cellpadding="0" border="0">
                      <tr> 
                        <td id="texte2b">Photo:<br>(306x419)</td>
                        <td width="10">&nbsp;</td>
                        <td><input type="file" name="LE_FICHIER[]"></td>
                      </tr>
                    </table></td>
                </tr>
              </table>
			</td>
          </tr>
         	<tr> 
        		<td align="center" id="texte3_blanc"><br> <img src="../images/pixel_rouge.jpg" width="110%" height="1"></td>
         	</tr>
	       	<tr> 
	        	<td align="center" id="texte3">Rubriques</td>
	        </tr>
			<?
				$query= "SELECT * FROM rubrique ";
				$query.=" LEFT JOIN produit_rubrique ON produit_rubrique.num_rubrique = rubrique.num_rubrique ";
				$query.=" WHERE produit_rubrique.num_produit=". $num_produit ;	
				$query.=" OR produit_rubrique.num_produit IS NULL";	
				$query.=" ORDER BY rubrique.num_rubrique ";

				$query= "SELECT * FROM rubrique ";
				$query.=" ORDER BY rubrique.num_rubrique ";
				//echo 	$query;		
				$rstemp = mysql_query($query);
				$nb_enr = mysql_num_rows($rstemp);
			?>
          <tr> 
            <td align="center"> 
				<table width="80%" border="0" cellpadding="0" cellspacing="0">
                <tr> 
					<? while ($rub = mysql_fetch_array($rstemp)) { ?>
                  	<?		
						$num_rubrique = $rub["num_rubrique"];
						$rubrique =  $rub["rubrique"];
						$query= "SELECT * FROM produit_rubrique ";
						$query.=" WHERE produit_rubrique.num_produit=". $num_produit ;	
						$query.=" AND produit_rubrique.num_rubrique=". $num_rubrique ;
						//echo 	$query;		
						$rstemp2 = mysql_query($query);
						$nb_enr2 = mysql_num_rows($rstemp2);
					?>
                  	<td width="25%"> 
						<table cellspacing="0" cellpadding="0" border="0">
                      	<tr> 
                        	<td id="texte2b"><? echo $rubrique ?></td>
							<? if ($nb_enr2 >0){ ?>	
                        		<td><input  type="checkbox" name="num_rubrique_<? echo $num_rubrique ?>" value="<? echo $num_rubrique ?>" checked></td>
							<? }else{  ?>
								<td><input  type="checkbox" name="num_rubrique_<? echo $num_rubrique ?>" value="<? echo $num_rubrique ?>" ></td>
							<?  } ?>
                      	</tr>
                    	</table>
					</td>
          			<? }?>	
                </tr>
              </table>
			</td>
          </tr>
          <tr> 
            <td align="center" id="texte3_blanc"><br> <img src="../images/pixel_rouge.jpg" width="110%" height="1"> 
            </td>
          </tr>
		 	 <?
				$query="SELECT * FROM categorie ";
				$query.=" ORDER BY categorie ";	
				$rstemp = mysql_query($query);
				$nb_enr = mysql_num_rows($rstemp);
			?>
          <tr> 
            <td align="center" id="texte3">Catégories&nbsp;&nbsp;<a href="categorie_ajout.php"><img src="images/modifier_off.gif" alt="" width="13" height="13" border="0"></td>
          </tr>
          <tr> 
            <td align="center"> <table width="80%" border="0" cellpadding="0" cellspacing="0">
                <tr> 
                  <? $cpt_col=1 ?>
                  <? while ($cat = mysql_fetch_array($rstemp)) { ?>
                  	<?		
						$num_categorie = $cat["num_categorie"];
						$categorie =  $cat["categorie"];
					
						$query= "SELECT * FROM produit_categorie ";
						$query.=" WHERE produit_categorie.num_produit=". $num_produit ;	
						$query.=" AND produit_categorie.num_categorie=". $num_categorie ;
						//echo 	$query;		
						$rstemp2 = mysql_query($query);
						$nb_enr2 = mysql_num_rows($rstemp2);
					?>
                  	<td id="texte2b"><? echo $categorie ?>:</td>
					<? if ($nb_enr2 >0){ ?>	
                  		<td><input type="checkbox" name="num_categorie_<? echo $num_categorie ?>" value="<? echo $num_categorie ?>" checked></td>
					<? }else{  ?>
						<td><input type="checkbox" name="num_categorie_<? echo $num_categorie ?>" value="<? echo $num_categorie ?>"></td>
					<?  } ?>
                  	<td width="23">&nbsp;</td>
                  <? if ($cpt_col%4 ==0) {?>
                </tr>
                <tr> 
                  <? }?>
                  <? $cpt_col++ ?>
                  <? } ?>
                </tr>
              </table></td>
          </tr>
		  	<tr> 
        		<td align="center" id="texte3_blanc"><br> <img src="../images/pixel_rouge.jpg" width="110%" height="1"></td>
         	</tr>
	       	<tr> 
	        	<td align="center" id="texte3">Prix et promotions</td>
	        </tr>
			<tr> 
	            <td> 
					<table width="100%" border="0" cellpadding="2" cellspacing="0">
	                <tr> 
	                  <td id="texte2b" width="10%" height="30">Prix :&nbsp;&nbsp;<input size="5"  name="prix" type="text" value="<? echo $prix?>">€</td>
	                </tr>
	              </table>
				</td>
          </tr>
			<tr> 
	            <td> 
					<table width="100%" border="0" cellpadding="2" cellspacing="0">
	                <tr> 
	                  <td width="10%" height="30" id="texte2b">Pieces du lot :</td>
					  <td width="57">&nbsp;</td>
	                  <td  height="30" id="texte2b">Prix promo :</td>
	                </tr>
	                <tr> 
	                  <td height="30" id="texte2b"><input size="14"  name="lot" type="text" value="<? echo $lot?>">Piéces</td>
	                  <td>&nbsp;</td>
					  <td height="30" id="texte2b"><input size="5"  name="promo_lot" type="text" value="<? echo $promo_lot?>">€</td>
	                </tr>
	              </table>
				</td>
          	</tr>
			
			<tr> 
	            <td> 
					<table width="100%" border="0" cellpadding="2" cellspacing="0">
	                <tr>
	                  	<td width="50%" height="30" id="texte2b"><img src="images/frenchflag.gif" width="18" alt="" border="0">Libéllé Flash n°1 :&nbsp;&nbsp;<input size="20"  name="lib_flash1" type="text" value="<? echo htmlspecialchars($lib_flash1)?>"></td>
	                	<td width="50%" height="30" id="texte2b"><img src="images/ukflag.gif" width="18" alt="" border="0">Libéllé Flash n°1 :&nbsp;&nbsp;<input size="20"  name="lib_flash1_en" type="text" value="<? echo htmlspecialchars($lib_flash1_en)?>"></td>
					</tr>
					<tr>
						<td width="50%" height="30" id="texte2b"><img src="images/frenchflag.gif" width="18" alt="" border="0">Libéllé Flash n°2 :&nbsp;&nbsp;<input size="20"  name="lib_flash2" type="text" value="<? echo htmlspecialchars($lib_flash2)?>"></td>
	                	<td width="50%" height="30" id="texte2b"><img src="images/ukflag.gif" width="18" alt="" border="0">Libéllé Flash n°2 :&nbsp;&nbsp;<input size="20"  name="lib_flash2_en" type="text" value="<? echo htmlspecialchars($lib_flash2_en)?>"></td>
					</tr>
	              </table>
				</td>
          	</tr>
			
			<tr> 
	            <td> 
					<table width="100%" border="0" cellpadding="2" cellspacing="0">
	                <tr>
	                  <td width="64%" height="30" id="texte2b"><img src="images/frenchflag.gif" width="18" alt="" border="0">Libéllé Promotion :&nbsp;&nbsp;<input size="40"  name="lib_lot" type="text" value="<? echo htmlspecialchars($lib_lot)?>"></td>
	                </tr>
	              </table>
				</td>
          	</tr>
			<tr> 
	            <td> 
					<table width="100%" border="0" cellpadding="2" cellspacing="0">
	                <tr>
	                  <td width="64%" height="30" id="texte2b"><img src="images/ukflag.gif" width="18" alt="" border="0">Libéllé Promotion :&nbsp;&nbsp;<input size="40"  name="lib_lot_en" type="text" value="<? echo htmlspecialchars($lib_lot_en)?>"></td>
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
                  		<td align="center"> <input type="button" value="retour" onClick="javascript:document.location.href='produit_liste.php'"> </td>
                  		<td align="center"> <input type="submit" name="vvv" value="Valider"> 
                  		</td>
                	</tr>
              		</table>
				</td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
          </tr>
		  
        </form>
      </table>
	</td>
  </tr>
</table>
</body>
</html>
<? include_once("../include/_connexion_fin.php"); ?>