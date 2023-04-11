<?php
include_once("modules/getParameters.php");

$xml = simplexml_load_file('db/users/xmlDataBase.xml') or die('can\'t not read');


function _passwordConfirm($pPassword_Confirm, $pNewPassword) {
    if ($pPassword_Confirm == $pNewPassword) {
        return 0;
    }else{
        return 5000;
    };
};

$err = _passwordConfirm($password_Confirm, $newPassword );
///////////////////////////////////////////////////////////////////////////

if ($err== 0) {
    // $xml = simplexml_load_file('db/users/xmlDataBase.xml') or die('can¡t not read');
    $usernameList = $xml->xpath('/users/user/username');
    // print_r($usernameList);
    for($i=0; $i<count($usernameList); $i++){
        if ($username == $usernameList[$i]){
            $cont = $i+1;

            $passwordList = $xml->xpath('/users/user/password');


            // Almacenamiento de la ruta de xpath que luego se usará más adelante
            $userRoot = '/users/user['. $cont.']'; //Solo es importante este y email
            $rutePassXpath = '/users/user['. $cont.']/password';
            $ruteUserXpath = '/users/user['. $cont.']/username';
            $ruteEmailXpath = '/users/user['. $cont.']/email';


            //Aquí se usa la ruta de xpath
            $userRootToPut = $xml->xpath($userRoot);
            $passwordToPut = $xml->xpath($rutePassXpath);
            $usernamedToPut = $xml->xpath($ruteUserXpath);
            $emailToPut = $xml->xpath($ruteEmailXpath);
            // print_r($userRootToPut);

            $recover_email = $emailToPut[0][0];


            $node = $xml->addChild('user');
            $node->addChild('username', $username);
            $node->addChild('email', $recover_email);
            $node->addChild('password',$newPassword);
            // $passwordToPut->push($newPassword);



            unset($userRootToPut[0][0]); 
            //Me he dado cuenta de que puedes hacer un unset de todo el root y funcionaria igual. No hace falta
            //los otros unset.

            // unset($passwordToPut[0][0]);
            // unset($usernamedToPut[0][0]);
            // unset($emailToPut[0][0]);
            $xml->asXML('db/users/xmlDataBase.xml');
        };
    };
}else {
    die("password not coincident");
};
$xml->asXML('db/users/xmlDataBase.xml');
header('Location: ../webservice/ws.html');

// header('Location: ../index.html');
?>