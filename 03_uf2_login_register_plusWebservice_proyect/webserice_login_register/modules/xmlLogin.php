<?php 
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<xml_response>
    <login>
        <user>hola usuario: $username</user>
        <email>$email</email>
    </login>
    <errors_info>
        <error_num>$error</error_num>
        <error_info>$message</error_info>
    </errors_info>
</xml_response>
XML;

header ("Content-Type: text/xml");

// $xml = new SimpleXMLElement($xmlstr);
?>