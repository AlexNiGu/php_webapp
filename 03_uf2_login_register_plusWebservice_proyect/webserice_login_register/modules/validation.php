<?php
// Validation if the camps exists or not
function _KnowIfItsLoginOrRegister(){

    if(isset($_GET["password_Confirm"])){
        return TRUE;
    }else{
        return FALSE;
    };

};

function _ValidateExistingParamsForRegister($pUsername, $pPassword, $pEmail, $pPassword_Confirm){
    if (empty($pUsername) ||
    empty($pPassword) ||
    empty($pEmail) ||
    empty($pPassword_Confirm)) {
        return 1005;
    }else{
        return 0;
    };
};

function _ValidateExistingParamsForLogin($pUsername, $pPassword){
        
    if (empty($pUsername) ||
    empty($pPassword)){
        return 1000;
    }else{
        return 0;
    };
};


////////////////////////////////////////////////////////////////////////////////////////////////////////

// Validation if the fields are correct depending if the user is trying to sign in or sign up

function _ValidateParamsForRegister($pPassword, $pPassword_Confirm){
    // echo $pPassword;
    // echo $password_Confirm;
    // die();
    if ($pPassword == $pPassword_Confirm){
        return 0;
        // die("Password not coincident");
    }else{
        return 500;
    };
};


function _ValidateParamsForLogin($pUsername, $pPassword) {
    $var_user = FALSE;
    $var_password = FALSE;
    $cont = 0;
    $xml = simplexml_load_file('db/users/xmlDataBase.xml');

    $usernameValidation = $xml->xpath('/users/user/username');
    $passwordValidation = $xml->xpath('/users/user/password');
    
    // print_r($usernameValidation);
    // print_r($passwordValidation);
    
    
    for($i=0; $i<count($usernameValidation); $i++){
        // echo $usernameValidation[$i];
        if ($var_user == FALSE) {
            $cont++;
        };
        if ($pUsername == $usernameValidation[$i]){
            // echo $pUsername. "<br>";
            $var_user = TRUE; 
        };
    };
    // echo $var_user;
    // echo $cont. "<br>";

    // $passwordValidation = $xml->xpath('/users/user/password['.$cont.']'); //Esto debería funcionar pero no funciona
    
    // print_r($passwordValidation);
    // die();
    for($i=0; $i<$cont; $i++){
        // echo $passwordValidation[$i];
        // echo $i. "<br>";
        if (($pPassword == $passwordValidation[$i]) && ($i == $cont-1)){
            // echo $pPassword. "<br>";
            // echo $passwordValidation[$i];
            // die();
            $var_password = TRUE;
        };
    };
    // echo $var_password;
    if($var_password == TRUE and $var_user == TRUE ){
        return 0; 
    }else{
        return 2000;
    };
    $xml->asXML('db/connections/xmlConnections.xml');
};

function _KnowIfUserExistsInDataBase($pUsernameRegister){

    $xml = simplexml_load_file('db/users/xmlDataBase.xml');

    $usernameValidation = $xml->xpath('/users/user/username');
    $bol = TRUE;


    for($i=0; $i<count($usernameValidation); $i++){
        if ($pUsernameRegister == $usernameValidation[$i]){
            return 300;
            $bol = FALSE;
        };
    };
    if ($Bol == TRUE) {
        return 0;
    };
};



#-----------------------------------------------------------------------------------------------------------------
$control_Login_Register = _KnowIfItsLoginOrRegister(); 

// die($control_Login_Register);
if ($control_Login_Register == TRUE ){

    if(isset($_GET["password_Confirm"])){
        $password_Confirm=$_GET["password_Confirm"];
        // echo $password_Confirm;
    };

    $error = _ValidateExistingParamsForRegister($username, $password, $email, $password_Confirm);

    if ($error == 0){
        $error = _ValidateParamsForRegister($password,$password_Confirm);

        if ($error == 0){
            $error = _KnowIfUserExistsInDataBase($username);
        };
    }; 
}else{
    $error = _ValidateExistingParamsForLogin($username, $password);
    if ($error == 0){

        $error = _ValidateParamsForLogin($username, $password);
    }; 
};

#-----------------------------------------------------------------------------------------------------------------

?>