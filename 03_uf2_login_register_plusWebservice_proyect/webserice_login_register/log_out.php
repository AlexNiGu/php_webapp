<?php

include_once("modules/getParameters.php");
$xml = simplexml_load_file('db/connections/xmlConnections.xml') or die('can\'t not read');

$users = $xml->xpath("/users_conected/user");
unset($users[0][0]);


$usernameDelete = $xml->xpath('/users_conected/user/username');
$passwordDelete = $xml->xpath('/users_conected/user/password');


//Estos bucles se hacen para que se borre el ususario correcto. Sinó si lo hacemos como está abajo en los comentarios
//Lo que ocurrirá es que, en el momento en el que un ususario se desconecte, se desconectarán todos
//De esta forma, con bucles, nos aseguramos de que solo se borre el que se va a desconectar
for($i=0; $i<count($usernameDelete); $i++){
    print_r($usernameDelete[$i]);
    if ($username == $usernameDelete[0][$i]){
        unset($usernameDelete[0][$i]);
    };
};

for($i=0; $i<count($passwordDelete); $i++){
    print_r($passwordDelete[$i]);
    if ($password == $passwordDelete[0][$i]){
        unset($passwordDelete[0][$i]);
    };
};

// $users = $xml->xpath("/users_conected/user/username");
// unset($users[0][0]);
// $users = $xml->xpath("/users_conected/user/password");
// unset($users[0][0]);

$xml->asXML('db/connections/xmlConnections.xml');

header('Location: ../index.html');

?>