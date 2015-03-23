<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<? include_once("../include/_connexion.php"); ?>
<? include_once("_fonctions.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>cts</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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

</script>
</head>
<body id="fond_blanc" leftmargin="0" topmargin="0" bgproperties="fixed" id="fond_rose" onLoad="MM_preloadImages('images/modifier_over.gif','images/supprimer_over.gif','images/chercher_over.gif')" border="0">
<table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0">
  <tr> 
  	<?
		if (!isset($_GET["ordre"])) $_GET["ordre"] = "date_news";
		$sql = "SELECT * ";
        $sql .= " FROM news ";
		$sql .= " ORDER BY ". $_GET["ordre"]; 
		$result = mysql_query($sql);
		$nb_enr = mysql_num_rows($result);
	?>
	<? if (mysql_num_rows($result)>0) {?>
    	<td valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="5">
	        <tr align="center" > 
				<td class="affichageT" align="left">&nbsp;</td>
	          	<td class="affichageT" align="left"><a class="affichageT" href="news_liste.php?ordre=id_news">n°</a></td>
			  	<td class="affichageT" align="left"><a class="affichageT" href="news_liste.php?ordre=date_news">date</a></td>
				<td class="affichageT" align="left"><a class="affichageT" href="news_liste.php?ordre=description">description</a></td>
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
			 	<td class="<? echo $class_ch?>" align="left"><a href="news_modif.php?id_news=<? echo $row["id_news"]?>"><img src="modifier_off.gif" alt="" width="13" height="13" border="0"></a></td>
	          	<td class="<? echo $class_ch?>" align="left"><? echo $row["id_news"]?></td>
			  	<td class="<? echo $class_ch?>" align="left"><b><? echo format_date_ss_heure($row["date_news"])?></b></td>
			   	<td class="<? echo $class_ch?>" align="left"><b><? echo $row["description"]?></b></td>
			  	<td class="<? echo $class_ch?>" align="left"><a href="news_suppr.php?id_news=<? echo $row["id_news"]?>" onclick="return confirm('êtes-vous sûr de vouloir supprimer la news <? echo $row["id_news"] ?> ?')"><img src="supprimer_off.gif" alt="" width="13" height="13" border="0"></a></td>
	        </tr>
				<? $cc++ ?>	
			<? }?>
	      	</table>
	  </td>
	  <? } else {?>
	  	<td align="center">Pas de news dans la base</td>
	  <? }?>
  </tr>
</table>
</body>
</html>
<?php include_once("../include/_connexion_fin.php"); ?>