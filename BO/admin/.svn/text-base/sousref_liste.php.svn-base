<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>collants.fr - spécialiste du collant</title>
<META NAME="description" content="Le spécialiste du collant, lingerie, bas, accessoire féminin, pour la sensualité des femmes.">
<META NAME="keywords" content="collants, collant, bas, bas top, classique, fantaisie, collant homme, jambiere, maintien, nouveautes, opaque, resille, sante, cecilia de raphael, cervin, cette, collanto, doredore, gerbe, goldenlady, lebourget, levee, mura, oroblu, philippe matignon, lingerie, voile, lycra, nylon, sexy, bien-etre, femme, feminin, collection, coton, polyester, createur, creation, creativite, intimite,  pour elle, pour lui, exotique, exotisme, nature, zen, bio, naturelle, naturel, intime, sens, sensorielle, plaisir, liberté, seduire, seduction, vivre, emotion, dax">
<META content="ALL" name="robots">
<META content="document" name="resource-type">
<META content="15 days" name="revisit-after">
<META name="dc.description" content="Le sp&eacute;cialiste du collant, lingerie, bas, accessoire f&eacute;minin, pour la sensualit&eacute; des femmes.">
<META name="dc.keywords" content="collants, collant, bas, bas top, classique, fantaisie, collant homme, jambiere, maintien, nouveautes, opaque, resille, sante, cecilia de raphael, cervin, cette, collanto, doredore, gerbe, goldenlady, lebourget, levee, mura, oroblu, philippe matignon, lingerie, voile, lycra, nylon, sexy, bien-etre, femme, feminin, collection, coton, polyester, createur, creation, creativite, intimite,  pour elle, pour lui, exotique, exotisme, nature, zen, bio, naturelle, naturel, intime, sens, sensorielle, plaisir, liberté, seduire, seduction, vivre, emotion, dax">
<META name="author" CONTENT ="collants.fr">
<META name="dc.subject" content="Le sp&eacute;cialiste du collant, lingerie, bas, accessoire f&eacute;minin, pour la sensualit&eacute; des femmes.">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../include/collants_styles_admin.css" rel="stylesheet" type="text/css">
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

</script>
</head>
<body id="fond_blanc" leftmargin="0" topmargin="0" bgproperties="fixed" id="fond_rose" onLoad="MM_preloadImages('images/modifier_over.gif','images/supprimer_over.gif','images/chercher_over.gif')" border="0">
<table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0">
  <tr> 
  	<?
		$sql = "SELECT produit_sousref.num_produit_sousref,produit_sousref.sous_reference, marque.marque,  ";
		$sql .= " produit.num_produit ,produit.designation , taille.taille, couleur.couleur,  produit.reference,produit_sousref.stock  ";
        $sql .= " FROM produit_sousref ";
		$sql .= " INNER JOIN produit ON produit.num_produit = produit_sousref.num_produit";
		$sql .= " INNER JOIN marque ON marque.num_marque = produit.num_marque";
		$sql .= " INNER JOIN taille ON taille.num_taille = produit_sousref.num_taille";
		$sql .= " INNER JOIN couleur ON couleur.num_couleur = produit_sousref.num_couleur";
		$sql .= " WHERE produit_sousref.actif=1 AND produit.actif=1 ";
		$sql .= " ORDER BY produit.designation, couleur.couleur,taille.taille  "; 
		//echo $sql;
		$result = mysql_query($sql);
		$nb_enr = mysql_num_rows($result);
	?>
	<? if (mysql_num_rows($result)>0) {?>
    	<td valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="5">
	        <tr align="center" > 
				<td class="affichageT" align="left">&nbsp;</td>
	          	<td class="affichageT" align="left"><a class="affichageT" href="#">sous ref</a></td>
				<td class="affichageT" align="left"><a class="affichageT" href="#">ref.</a></td>
			  	<td class="affichageT" align="left"><a class="affichageT" href="#">designation</a></td>
			  	<td class="affichageT" align="left"><a class="affichageT" href="#">couleur</a></td>
			  	<td class="affichageT" align="left"><a class="affichageT" href="#">taille</a></td>
				<td class="affichageT" align="left"><a class="affichageT" href="#">marque</a></td>
				<td class="affichageT" align="left"><a class="affichageT" href="#" >stock</a></td>
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
				<td class="<? echo $class_ch?>" align="left"><a href="sousref_liste_produit.php?num_produit=<? echo $row["num_produit"]?>"><img src="images/modifier_off.gif" alt="" width="13" height="13" border="0"></a></td>
				<td class="<? echo $class_ch?>" align="left"><? echo $row["sous_reference"]?></td>
				<td class="<? echo $class_ch?>" align="left"><? echo $row["reference"]?></td>
				<td class="<? echo $class_ch?>" align="left"><b><? echo $row["designation"]?></b></td>
				<td class="<? echo $class_ch?>" align="left"><strong><? echo $row["couleur"]?></strong></td>
				<td class="<? echo $class_ch?>" align="left"><strong><? echo $row["taille"]?></strong></td>
				<td class="<? echo $class_ch?>" align="left"><? echo $row["marque"]?></td>
				<td class="<? echo $class_ch?>" align="left"><? echo $row["stock"]?></td>
				<td class="<? echo $class_ch?>" align="left"><a href="sousref_suppr.php?num_produit=<? echo $row["num_produit_sousref"]?>" onclick="return confirm('êtes-vous sûr de vouloir supprimer la référence <? echo $row["num_produit_sousref"] ?> ?')"><img src="images/supprimer_off.gif" alt="" width="13" height="13" border="0"></a></td>
	        </tr>
				<? $cc++ ?>	
			<? }?>
	      	</table>
	  </td>
	  <? } else {?>
	  	<td align="center">Pas de sous references dans la base</td>
	  <? }?>
  </tr>
</table>
</body>
</html>
<?php include_once("../include/_connexion_fin.php"); ?>