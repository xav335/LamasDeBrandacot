<?php include_once("include/_connexion.php"); ?>
<?php
$sql = "SELECT * ";
$sql .= " FROM lama ";
//$sql .= "WHERE DATE(date_lama) >= Date(now()) ";
$sql .= " ORDER BY date_lama DESC"; 
$result = mysql_query($sql);
$nb_enr = mysql_num_rows($result);

$dom = new DOMDocument('1.0', 'iso-8859-1');

	$actualite = $dom->createElement('actualite');
if (mysql_num_rows($result)>0){
	
	while($row=mysql_fetch_array($result)){
	
    	$item = $dom->createElement('item');
        	$titre = $dom->createElement('titre',utf8_encode($row["titre"]));
        	$dateTemp = new DateTime($row["date_lama"]);
        	$date = $dom->createElement('date', $dateTemp->format('d/m/Y'));
        	$texte = $dom->createElement('texte',utf8_encode($row["description"]));
        		$sql = "SELECT * ";
				$sql .= " FROM media_lama ";
				$sql .= "WHERE id_lama = ". $row["id_lama"] ." ";
				$sql .= " ORDER BY type_media"; 
				$result2 = mysql_query($sql);
				$nb_enr2 = mysql_num_rows($result2);
				if (mysql_num_rows($result2)>0){
					while($row2=mysql_fetch_array($result2)){
	        			$media = $dom->createElement('media');
		        		$attr_type = $dom->createAttribute('type');
		        		if($row2[type_media]==0){
		        			$media_type = $dom->createTextNode('image');
		        		}else {
		        			$media_type = $dom->createTextNode('video');
		        		}
		        		$attr_type->appendChild($media_type);
		        		$media->appendChild($attr_type);
	        			$urlApercu = $dom->createElement('urlApercu', utf8_encode($row2["url_apercu"]));
	        			$urlMedia = $dom->createElement('urlMedia', utf8_encode($row2["url_media"]));
		        		$media->appendChild($urlApercu);	
		        		$media->appendChild($urlMedia);
		        		
		        	$item->appendChild($media);	
					}
				}	
        $item->appendChild($titre);
        $item->appendChild($date);
        $item->appendChild($texte);
	$actualite->appendChild($item);

	}
}
$dom->appendChild($actualite);
$dom->normalizeDocument();
echo $dom->saveXML();
?>
<?php include_once("include/_connexion_fin.php"); ?>