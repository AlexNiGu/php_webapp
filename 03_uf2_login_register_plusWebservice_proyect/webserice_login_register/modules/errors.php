<?php
switch ($error) {
    case 2000:
        $message='Password incorrect for this user or user not exists in the dataBase';
        break;
    case 1000:
        $message='Fill the fields for Login!';
        break;
    case 1005:
        $message='Fill the fields for Register!';
        break;
    case 500:
        $message = 'Password not coincident';
        break;
    case 300:
        $message = 'This name User is in the DataBase already';
        break;
    case 0:
        $message = 'All correct!';
        break;
}


//if ($error == 2000){
    // echo $error;
    //$message='Password incorrect for this user or user not exists in the dataBase';
//}elseif ($error == 1000){
    // echo $error;
    //$message='Fill the fields for Login!';
//}elseif ($error == 1005){
    //$message='Fill the fields for Register!';
//}elseif ($error == 500){
    //$message = 'Password not coincident';
//}elseif ($error == 300){
    //$message = 'This name User is in the DataBase already';
//}elseif($error == 0){
    //$message = 'All correct!';
//}; 
?>