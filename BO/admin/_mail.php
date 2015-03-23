<? // Interface PHP pour mail()
include("../include/libmail.php");
function sendMail($n,$m,$nT,$mT,$sujet,$body) {
   // l'émetteur
   $tete = "From: ".$n." <".$m.">\n";
   $tete .= "Reply-To: ".$m."\n";
   // et zou... false si erreur d'émission
   return mail($nT." <".$mT.">",$sujet,$body,$tete);
   }
  
 function sendLibMail($from,$to,$sujet,$message){
 	
		$mail=new Mail;
		$mail->AutoCheck(false);
		$mail->From($from);
		$mail->To ($to);
		$sujet=stripslashes($sujet);
		$mail->Subject($sujet);
		$message=stripslashes($message);
		$mail->Body($message,"iso-8859-15");
		$mail->Format("text");
		$mail->Priority(1);
		$mail->Send();
		//$msg = $mail->Get();
		$mail = NULL;
 }  
 
  function sendLibMailHtml($from,$to,$sujet,$message){
 	
		$mail=new Mail;
		$mail->AutoCheck(false);
		$mail->From($from);
		$mail->To ($to);
		$sujet=stripslashes($sujet);
		$mail->Subject($sujet);
		$message=stripslashes($message);
		$mail->Body($message,"iso-8859-15");
		$mail->Format("html");
		$mail->Priority(1);
		$mail->Send();
		//$msg = $mail->Get();
		$mail = NULL;
 }  
?>