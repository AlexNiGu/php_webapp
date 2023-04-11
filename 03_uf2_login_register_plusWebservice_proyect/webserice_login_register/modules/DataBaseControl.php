<?php

if ($control_Login_Register == TRUE){
    $xml = simplexml_load_file('db/users/xmlDataBase.xml');

    // $xmlString = file_get_contents('db/users/xmlDataBase.xml');
    // $xml = simplexml_load_string($xmlString) or die('cant not read');
    
    // if ($control_Login_Register = True) {
    $node = $xml->addChild('user');
    $node->addChild('username', $username);
    $node->addChild('email', $email);
    $node->addChild('password',$password);


    $xml->asXML('db/users/xmlDataBase.xml');



    // Connection
    $xml = simplexml_load_file('db/connections/xmlConnections.xml');

    $node = $xml->addChild('user');
    $node->addChild('username', $username);
    $node->addChild('password',$password);

    $xml->asXML('db/connections/xmlConnections.xml');
}else{
    $xml = simplexml_load_file('db/connections/xmlConnections.xml');

    $node = $xml->addChild('user');
    $node->addChild('username', $username);
    // $node->addChild('email', $email);
    $node->addChild('password',$password);

    $xml->asXML('db/connections/xmlConnections.xml');
};
?>