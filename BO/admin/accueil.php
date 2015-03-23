<? include_once("../include/config.php");?>
<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<?// echo $_SESSION["authentification"]?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ElevageLama.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../include/styles_admin.css" rel="stylesheet" type="text/css">
<script language="JavaScript1.2" src="coolmenus4.js" type="text/JavaScript">
</script>
</head>

<body scroll=no leftmargin="5" topmargin="5" id="fond_gris" >
<table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td align="center"> <table width="980" height="560" border="0"  cellpadding="0" cellspacing="0" background="admin3.jpg" id="border1">
        <tr> 
          <td height="560" align="left" valign="top"> 
          	<table width="100%" height="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="143" height="560" align="left" valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr> 
                      <td align="left" valign="top"><img src="pixel_transparent.gif" width="10" height="10"></td>
                      <td width="100%" height="560" align="left" valign="top"> 
                        <table width="167" border="0" cellpadding="0" cellspacing="0">
                           <tr> 
                            <td width="167" height="23" align="left" valign="top">&nbsp;</td>
                          </tr>
                          <tr> 
                            <td height="25" align="left" valign="top" id="texte3_rouge">ADMIN ElevageLama.com</td>
                          </tr>
                          <tr> 
                            <td width="167" height="183" align="left" valign="top">&nbsp;</td>
                          </tr>
                          <tr> 
                            <td height="25" align="left" valign="top" id="texte2_rouge">Gestion Actualit�s</td>
                          </tr>
                          <tr> 
                            <td height="25" align="left" valign="top"> <ilayer id="layerMenu0"> 
                              <div id="divMenu0"> <img src="cm_fill.gif" width="150" height="12" alt="" border="0"> 
                              </div>
                              </ilayer></td>
                          </tr>
                          <tr> 
                            <td height="25" align="left" valign="top"> <ilayer id="layerMenu1"> 
                              <div id="divMenu1"> <img src="cm_fill.gif" width="150" height="12" alt="" border="0"> 
                              </div>
                              </ilayer></td>
                          </tr>
                          
                         <tr> 
                            <td width="167" height="15" align="left" valign="top">&nbsp;</td>
                          </tr>

                          <tr> 
                            <td height="25" align="left" valign="top" id="texte2_rouge">Gestion Lamas</td>
                          </tr>
                          <tr> 
                            <td height="25" align="left" valign="top"> <ilayer id="layerMenu2"> 
                              <div id="divMenu2"> <img src="cm_fill.gif" width="150" height="12" alt="" border="0"> 
                              </div>
                              </ilayer></td>
                          </tr>
                          <tr> 
                            <td height="25" align="left" valign="top"> <ilayer id="layerMenu3"> 
                              <div id="divMenu3"> <img src="cm_fill.gif" width="150" height="12" alt="" border="0"> 
                              </div>
                              </ilayer></td>
                          </tr>
                          
                         <tr> 
                            <td width="167" height="15" align="left" valign="top">&nbsp;</td>
                          </tr>

                          <tr> 
                            <td height="25" align="left" valign="top" id="texte2_rouge">Gestion Liens</td>
                          </tr>
                          <tr> 
                            <td height="25" align="left" valign="top"> <ilayer id="layerMenu4"> 
                              <div id="divMenu4"> <img src="cm_fill.gif" width="150" height="12" alt="" border="0"> 
                              </div>
                              </ilayer></td>
                          </tr>
                          
                          
                         <tr> 
                            <td width="167" height="20" align="left" valign="top">&nbsp;</td>
                          </tr>

                          <tr> 
                            <td height="43" align="left" valign="top">&nbsp;</td>
                          </tr>
                          
                          <tr> 
                            <td height="25" align="left" valign="top"><a id="menu" href="index.php?action=deconnexion"><span id="crochet_menu">[</span> 
                              Deconnexion </a></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
                <td width="91%" align="left" valign="top"> <table width="760" height="523" border="0" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td width="636" height="40"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td height="37"> <table cellspacing="0" cellpadding="0" border="0">
                                <tr> 
                                  <td width="45" id="texte2_rouge">Date :</td>
                                  <td id="texte2_rouge"><? echo date("d/m/Y ")?></font></td>
                                  <td width=15>&nbsp;</td>
                                </tr>
                              </table></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr> 
                      <td width="636" height="474" align="left" valign="top"> 
                        <iframe src="vide.php" id="border2" name="produit" scrolling="auto" height="100%"  width="100%" marginleft="0"  topmargin="0" align="top" valign="left" frameborder="0" ></iframe> 
                      </td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
</tr>
</table>
<!-- PARTIE N�2 "script" DU MENU BRATTA -->
<SCRIPT>
/*** 
This is the menu creation code - place it right after you body tag
Feel free to add this to a stand-alone js file and link it to your page.
**/
//Menu object creation
oCMenu=new makeCM("oCMenu") //Making the menu object. Argument: menuname

oCMenu.frames = 0
//Menu properties   
oCMenu.pxBetween=0
//Using the cm_page object to place the menu ----
oCMenu.fromLeft=0
oCMenu.fromTop=0
oCMenu.rows=1
oCMenu.menuPlacement=0
                                                             
oCMenu.offlineRoot="file:///C|/Inetpub/wwwroot/dhtmlcentral/projects/coolmenus/examples/" 
oCMenu.onlineRoot="/admin/" 
oCMenu.resizeCheck=1 
oCMenu.wait=100 
oCMenu.fillImg="cm_fill.gif"
oCMenu.zIndex=0

//Background bar properties
oCMenu.useBar=0
oCMenu.barWidth="100%"
oCMenu.barHeight="menu" 
oCMenu.barClass="clBar"
oCMenu.barX=0 
oCMenu.barY=0
oCMenu.barBorderX=0
oCMenu.barBorderY=0
oCMenu.barBorderClass=""


//Level properties - ALL properties have to be spesified in level 0
oCMenu.level[0]=new cm_makeLevel() //Add this for each new level
oCMenu.level[0].width=130
oCMenu.level[0].height=19 
oCMenu.level[0].regClass="clLevel0"
oCMenu.level[0].overClass="clLevel0over"
oCMenu.level[0].borderX=0
oCMenu.level[0].borderY=0
oCMenu.level[0].borderClass="clLevel0border"
// decalage du niveau 1
oCMenu.level[0].offsetX=20
oCMenu.level[0].offsetY=0
// fin decalage du niveau 1
oCMenu.level[0].rows=0
oCMenu.level[0].arrow=0
oCMenu.level[0].arrowWidth=0
oCMenu.level[0].arrowHeight=0
oCMenu.level[0].align="bottom"
oCMenu.level[0].roundBorder=1

//EXAMPLE SUB LEVEL[1] PROPERTIES - You have to specify the properties you want different from LEVEL[0] - If you want all items to look the same just remove this
/*oCMenu.level[1]=new cm_makeLevel() //Add this for each new level (adding one to the number)
oCMenu.level[1].width=oCMenu.level[0].width-2
oCMenu.level[1].height=22
oCMenu.level[1].regClass="clLevel1"
oCMenu.level[1].overClass="clLevel1over"
oCMenu.level[1].borderX=0
oCMenu.level[1].borderY=0
oCMenu.level[1].align="right" 
oCMenu.level[1].offsetX=1//-(oCMenu.level[0].width-2)/2+20
oCMenu.level[1].offsetY=0
oCMenu.level[1].borderClass="clLevel1border"*/

oCMenu.level[1]=new cm_makeLevel() //Add this for each new level (adding one to the number)
oCMenu.level[1].width=oCMenu.level[0].width
oCMenu.level[1].height=19
oCMenu.level[1].regClass="clLevel1"
oCMenu.level[1].overClass="clLevel1over"
oCMenu.level[1].borderX=1
oCMenu.level[1].borderY=1
oCMenu.level[1].align="right" 
oCMenu.level[1].offsetX=-(oCMenu.level[0].width-2)/2
oCMenu.level[1].offsetY=0
oCMenu.level[1].borderClass="clLevel1border"

/******************************************
Menu item creation:
myCoolMenu.makeMenu(name, parent_name, text, link, target, width, height, regImage, overImage, regClass, overClass , align, rows, nolink, onclick, onmouseover, onmouseout) 
**************************************/

oCMenu.makeMenu('top0','','<span ID="crochet_menu">[</span>&nbsp;Actualit�s','','produit','150','19','','','','','bottom')	
	oCMenu.makeMenu('sub00','top0','&nbsp;ajouter une actu','<?=$chemin?>admin/news_ajout.php','produit','146')
	oCMenu.makeMenu('sub01','top0','&nbsp;modifier/supprimer','<?=$chemin?>admin/news_liste.php','produit','146')
	
oCMenu.makeMenu('top1','','<span ID="crochet_menu">[</span>&nbsp;Image','','_top','150','19','','')	
	oCMenu.makeMenu('sub10','top1','&nbsp;ajouter/modifier/supprimer','<?=$chemin?>admin/media_liste_news.php','produit','146')
  		
oCMenu.makeMenu('top2','','<span ID="crochet_menu">[</span>&nbsp;Lamas','','produit','150','19','','','','','bottom')	
	oCMenu.makeMenu('sub20','top2','&nbsp;Cr�er une fiche','<?=$chemin?>admin/lama_ajout.php','produit','146')
	oCMenu.makeMenu('sub21','top2','&nbsp;modifier/supprimer','<?=$chemin?>admin/lama_liste.php','produit','146')
	
oCMenu.makeMenu('top3','','<span ID="crochet_menu">[</span>&nbsp;Image','','_top','150','19','','')	
	oCMenu.makeMenu('sub30','top3','&nbsp;ajouter/modifier/supprimer','<?=$chemin?>admin/media_liste_lama.php','produit','146')
  		
oCMenu.makeMenu('top4','','<span ID="crochet_menu">[</span>&nbsp;Liens','','produit','150','19','','','','','bottom')	
	oCMenu.makeMenu('sub40','top4','&nbsp;Ajouter un lien','<?=$chemin?>admin/lien_ajout.php','produit','146')
	oCMenu.makeMenu('sub41','top4','&nbsp;modifier/supprimer','<?=$chemin?>admin/lien_liste.php','produit','146')
	
  	
//*****************  Leave this line - it constructs the menu
oCMenu.construct()		
//******************  Leave this line - it constructs the menu

//Extra code to find position:
function findPos(num){
  //alert(num)
  if(bw.ns4){   //Netscape 4
    x = document.layers["layerMenu"+num].pageX
    y = document.layers["layerMenu"+num].pageY
  }else{ //other browsers
    x=0; y=0; var el,temp
    el = bw.ie4?document.all["divMenu"+num]:document.getElementById("divMenu"+num);
    if(el.offsetParent){
      temp = el
      while(temp.offsetParent){ //Looping parent elements to get the offset of them as well
        temp=temp.offsetParent; 
        x+=temp.offsetLeft
        y+=temp.offsetTop;
      }
    }
    x+=el.offsetLeft
    y+=el.offsetTop
  }
  //Returning the x and y as an array
  return [x,y]
}
function placeElements(){
  //Changing the position of ALL top items:
  pos = findPos(0)
  oCMenu.m["top0"].b.moveIt(pos[0],pos[1])
  pos = findPos(1)
  oCMenu.m["top1"].b.moveIt(pos[0],pos[1])
  pos = findPos(2)
  oCMenu.m["top2"].b.moveIt(pos[0],pos[1])
  pos = findPos(3)
  oCMenu.m["top3"].b.moveIt(pos[0],pos[1])
  pos = findPos(4)
  oCMenu.m["top4"].b.moveIt(pos[0],pos[1])
  
  //Setting the fromtop value
  oCMenu.fromTop = pos[1]
}
placeElements()
//Setting it to re place the elements after resize - the resize is not perfect though..
oCMenu.onafterresize="placeElements()"
</SCRIPT><!-- PARTIE N�2 "script" DU MENU BRATTA -->
</body>
</html>
