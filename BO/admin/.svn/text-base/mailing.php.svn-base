<? include_once("../include/_session.php");?>
<? include_once("../include/_securite.php");?>
<HTML><HEAD><TITLE>Mailing List</TITLE>
   <link href="../include/styles_admin.css" rel="stylesheet" type="text/css">

   <script language="JavaScript">
	function verif(email) {
		var arobase = email.indexOf("@"); var point = email.lastIndexOf(".")
		if((arobase < 3)||(point + 2 > email.length)||(point < arobase+3)) return false
		return true
	}
  
	function test(nom,mail,sujet,sorte) {
		if(nom.value=="") { alert('Nom requis !');nom.focus();return false }
		if(sujet.value=="") { alert('Sujet requis !');sujet.focus();return false }
		if(!verif(mail.value)) { alert('E-mail invalide !');mail.focus();return false }
		if (sorte=='envoi'){
			if(!confirm("Derni�re chance !!! \n �tes-vous s�r d'envoyer ce mail a l'ensemble des inscrits? ")) { return false }
		}	
		return true
	}
	
	function test_act(){
		document.formulaire.sorte.value='test';
		if (test(document.formulaire.nom,document.formulaire.EMail,document.formulaire.sujet,'test')){
			document.formulaire.submit();
		}
	} 
	
	function envoi_act(){
		document.formulaire.sorte.value='envoi';
		if (test(document.formulaire.nom,document.formulaire.EMail,document.formulaire.sujet,'envoi')){
			document.formulaire.submit();
		}
	} 
</script>
</HEAD><BODY>

<table width=100% height=100%><tr><td><center>
  
     
		<form name="formulaire" method="post" action="mailing_2.php" onSubmit="return test(this.nom,this.EMail,this.sujet,this.corps)">
			<input name="sorte" type="hidden" value="">
			<table border=0 cellspacing=0 id="fond_gris">
				<tr>
					<td>Nom</td>
					<td><input name="nom" type="text" value="ElevageLama.com" size=30></td>
					<td>E-mail</td>
					<td><input name="EMail" type="text"
						value="contact@elevagelama.com" size=40></td>
				</tr>
				<tr>
					<td>Sujet</td>
					<td colspan=3><input size=80 name="sujet"></td>
				</tr>
				<tr>
					<th colspan=4><textarea rows=15 cols=80 name="corps" wrap="soft"></textarea></th>
				</tr>
				<tr>
					<th colspan=2><input name="test" type="button" id="test"
						value="Tester la newsletter" onClick="test_act();"></th>
	
					<th colspan=2><input name="envoi" type="button" id="envoi" value="Envoyer la newsletter"  onClick="envoi_act();"></th>
					
				</tr>
			</table>
		</form></th></tr></table>
</BODY></HTML>
