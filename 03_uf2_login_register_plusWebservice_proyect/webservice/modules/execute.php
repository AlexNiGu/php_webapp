<?php
function ExecuteMethod($pMethod,$pP1,$pP2){
    global $err;
    global $res;
    switch ($pMethod){
        case "lcase":
            $err=strtolower($pP1);
            break;
        case "ucase":
            $err=strtoupper($pP1);
            break;
        case "reverse":
            $err=strrev($pP1);
            break;
        case "length":
            $err=strlen($pP1);
            break;
        case "capitalize":
            $err=ValidString($pP1);
            break;
        case "inString":
            $err=strpos($pP1,$pP2);
            break;
        case "equals":
            $err=ucfirst($pP1);
            break;

        //NUMERIC OPERATIONS
        case "sumar":
            $err = $pP1 + $pP2;
            break;
        case "restar":
            $err = $pP1 - $pP2;
            break;
        case "multiplicar":
            $err = $pP1 * $pP2;
            break;
        case "isType":
            if($err!=1){
                $err = gettype($pP1);
            }else{
                $aux=intval($pP1);
                $err= gettype($aux);
            };
            break;

        //DATETIME
        case "date":
            $err=date('l jS \of F Y h:i:s A');
            break;
        }; 
    return $err;
};
if($err==0 || $err==1){
    $res=ExecuteMethod($method,$p1,$p2);
    $message="todo correcto";
}elseif($err!=5001){
    $message="parametros incorrectos";
};
?>