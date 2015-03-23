<?php include_once("include/_connexion.php"); ?>
<?php
$sql = "SELECT * ";
$sql .= " FROM lien ";
$sql .= " ORDER BY libelle DESC"; 
$result = mysql_query($sql);
$nb_enr = mysql_num_rows($result);

$dom = new DOMDocument('1.0', 'iso-8859-1');

	$lien = $dom->createElement('liens');
if (mysql_num_rows($result)>0){
	
	while($row=mysql_fetch_array($result)){
	
    	$item = $dom->createElement('item');
		$libelle = $dom->createElement('libelle',utf8_encode($row["libelle"]));
		$description = $dom->createElement('description',utf8_encode($row["description"]));
		$url = $dom->createElement('url',utf8_encode($row["url"]));
 
        $item->appendChild($libelle);
        $item->appendChild($description);
        $item->appendChild($url);
		$lien->appendChild($item);

	}
}
$dom->appendChild($lien);
$dom->normalizeDocument();
echo $dom->saveXML();
?>
<?php include_once("include/_connexion_fin.php"); ?>