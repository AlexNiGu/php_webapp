<?php 
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<xml_response>
    <head>
    <date>$date</date>
        <method>$method</method>
        <parameters>
            <p1>$p1</p1>
            <p2>$p2</p2>
        </parameters>
        <errors_info>
            <error_num>$err</error_num>
            <error_info>$message</error_info>
    </errors_info>
    </head>
    <body>
        <response_value>$res</response_value>
    </body>
</xml_response>
XML;

header ("Content-Type: text/xml");
$xml = new SimpleXMLElement($xmlstr);
?>