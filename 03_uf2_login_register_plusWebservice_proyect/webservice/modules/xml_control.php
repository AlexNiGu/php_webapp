<?php
include 'XML/textxml.php';
header ("Content-Type: text/xml");
// El header imprime solo un tipo de cosas. Eso que quiere decir, que no se puede tener
// echos con el header de xml. Por lo que no hacer echos.
// "<br>--------Module xml";

$xml_response = new SimpleXMLElement($xmlstr);

$xml_response->xml_response[0]->response_value = $err;

// echo $xml_response->asXML();
?>