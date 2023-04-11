<?php
include_once("modules/getParameters.php");
include_once("modules/validation.php");
include_once("modules/errors.php");
if ($error == 0){
    include_once("modules/DataBaseControl.php");
    include_once("modules/xmlLogin.php");
    header('Location: ../webservice/ws.html');
}else {
    include_once("../errors.php");
}; 
?>