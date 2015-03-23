<? include_once("../include/config.php");?>
<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<? include_once("_imagemanipulator.php")?>
<? include_once("_fonctions.php")?>
<?
	$maintenant = date("Y-m-d H\:i\:s\ ");
	if ($_GET["id_lama"] <> "") {
		$_POST["id_lama"] = $_GET["id_lama"];
	}
	
	$ChaineSQL = "SELECT id_media_lama FROM media_lama ORDER by id_media_lama DESC limit 1";
	//echo $ChaineSQL;
	$result33=mysql_query($ChaineSQL);
	while ($row2 = mysql_fetch_array($result33)) { 
		$id_media_lama =  $row2["id_media_lama"];
		$id_media_lama++;
	}
	//echo $id_media_lama;
	
	if ($_POST["action"]=="ajout"){
		
		
		if ($_FILES["LE_FICHIER"]["name"][0] != "" ){ 
			$_FILES["LE_FICHIER"]["name"][0] = traitement_image($_FILES["LE_FICHIER"]["name"][0]);
			$url_media="../actu/".$_FILES["LE_FICHIER"]["name"][0];	
			$url_apercu="../actu/vignette/".$_FILES["LE_FICHIER"]["name"][0];	
			$url_media2="actu/".$_FILES["LE_FICHIER"]["name"][0];	
			$url_apercu2="actu/vignette/".$_FILES["LE_FICHIER"]["name"][0];	
			//echo $LE_FICHIER_name[0] ;
			//echo "<br>";
		}
		
		
		
		if ($_FILES["LE_FICHIER"]["name"][0] != "" ){ 
			move_uploaded_file($_FILES["LE_FICHIER"]["tmp_name"][0], $url_media);
			
			//---------------  Resize des images dans le bon format ----------------//
			
				$i = new ImageManipulator($url_media);
				$i->resize_to_fit(640,640,true,false);
				$path_img = $url_media;
				$i->save_jpeg($path_img);
				$i->end();	
			
				$i = new ImageManipulator($url_media);
				$i->resample(150,150);
				$path_img_thumb = $url_apercu;
				$i->save_jpeg($path_img_thumb);
				$i->end();	
				
			//---------------  FIN Resize des images dans le bon format -------------//
		}
		
		
		
		
		
		$query  = "INSERT INTO media_lama (id_lama, ";
		$query .= "url_media, url_apercu) VALUES (";
		$query .= " ". $_POST["id_lama"] ." " ;
		$query .= ", '". $chemin.$url_media2 ."' " ;
		$query .= ", '". $chemin.$url_apercu2 ."' " ;
		$query .= ")";
		//echo $query ."<br>";
		$rstemp = mysql_query($query);
	}
	
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>cts</title>
<link href="../include/styles_admin.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script Language="JavaScript">
var globWin;            
function wLoader(_URL)  
{	
	var _windowTitle="_blank";
	var _windowSettings="top=80,left=150,screenX=0,screenY=0,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=302,height=430";

	globWin = window.open(_URL,_windowTitle,_windowSettings);
}


function Form1_Validator(theForm){
	
	 if (theForm.id_media_lama.value == ""){
    	alert("Veuillez saisir une sous-référence.");
	    theForm.id_media_lama.focus();
	    return (false);
	 }  
	  if (!est_entier(theForm.stock.value) || theForm.stock.value ==""){
    	alert("Veuillez indiquez un stock valide");
	    theForm.stock.focus();
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
</script>
</head>
<body id="fond_blanc" leftmargin="0" topmargin="0" bgproperties="fixed" id="fond_rose" onLoad="MM_preloadImages('images/modifier_over.gif','images/supprimer_over.gif','images/chercher_over.gif')" border="0">
	<form action="media_liste_lama.php" method="post" name="formulaire">
	<table width="100%" border="0" cellpadding="2" cellspacing="0">
	<tr> 
		<td height="30"> 
		<?
			$sql = "SELECT *";
			$sql .= " FROM lama ";
			$sql .= " ORDER BY lama.date_lama"; 
			//echo $sql;
			$rstemp = mysql_query($sql);
			$nb_enr = mysql_num_rows($rstemp);
		?>
		<select name="id_lama" size="1" onChange="document.formulaire.submit();">
			<option value="">Choisissez un lama</option>
		<? while ($row = mysql_fetch_array($rstemp)) { ?>
			<? if ($_POST["id_lama"] == $row["id_lama"]) { ?>
		  	  	<option selected value="<? echo $row["id_lama"] ?>"><? echo format_date_ss_heure($row["date_lama"]) ?> - <? echo $row["titre"] ?></option>
		  	<? } else {?>
				<option value="<? echo $row["id_lama"] ?>"><? echo format_date_ss_heure($row["date_lama"]) ?> - <? echo $row["titre"] ?> </option>
			<? } ?>
		  <? } ?>
		</select>
		</td>
	</tr>
  	</table>
</form>
<?  if ($_POST["id_lama"]<>"") { ?>

<form action="media_liste_lama.php" method="post" name="formulaire2" onSubmit="return Form1_Validator(this)" enctype="multipart/form-data">
		<input name="action" type="hidden" value="ajout">
		<input name="id_lama" type="hidden" value="<? echo $_POST["id_lama"] ?>">
		<table width="250" border="0" cellpadding="2" cellspacing="0">
		<tr> 
			
			<td class="affichageT" align="left"></td>
			<td width="64%" height="30" id="texte2b">&nbsp;</td>
		</tr>
		<tr>
			<td height="30"><input type="file" name="LE_FICHIER[]"></td>
			<td height="30"><input name="ee" type="submit" value="Ajouter"></td>
		</tr>
		</table>
</form>

<table width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr> 
  	<?
		$sql = "SELECT media_lama.*  ";
        $sql .= " FROM media_lama ";
		$sql .= " INNER JOIN lama ON lama.id_lama = media_lama.id_lama";
		$sql .= " WHERE lama.id_lama=". $_POST["id_lama"];
		//echo $sql;
		$result = mysql_query($sql);
		$nb_enr = mysql_num_rows($result);
	?>
	<? if (mysql_num_rows($result)>0) {?>
    	<td valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="5">
	        <tr align="center" > 
	          	<td class="affichageT" align="left"><a class="affichageT" href="#">N°</a></td>
				<td class="affichageT" align="left"><a class="affichageT" href="#">Media</a></td>
			  	<td class="affichageT" align="left">&nbsp;</td>
	        </tr>
			<? while($row=mysql_fetch_array($result)){ ?>
				<?								
					if ($cc % 2){
						$class_ch="affichage2";
					}else{
						$class_ch="affichage";
					}
				?>		
			<tr align="center""> 
				<td class="<? echo $class_ch?>" align="left"><? echo $row["id_media_lama"]?></td>
				<td class="<? echo $class_ch?>" align="left"><a href="javascript:wLoader('<? echo $row["url_media"]?>')"><img src="<? echo $row["url_apercu"]?>" width="54" border="0"/></a></td>
				<td class="<? echo $class_ch?>" align="left"><a href="media_lama_suppr.php?id_lama=<? echo $_POST["id_lama"] ?>&id_media_lama=<? echo $row["id_media_lama"]?>" onClick="return confirm('êtes-vous sûr de vouloir supprimer le media <? echo $row["id_media_lama"] ?> ?')"><img src="supprimer_off.gif" alt="" width="13" height="13" border="0"></a></td>
	        </tr>
				<? $cc++ ?>	
			<? }?>
	      	</table>
	  </td>
	  <? } else {?>
	  	<td align="center">Pas de media dans la base</td>
	  <? }?>
  </tr>
</table>

	
		
	
<?  } ?>
<a name="baba"></a>
</body>
</html>
<?php include_once("../include/_connexion_fin.php"); ?>