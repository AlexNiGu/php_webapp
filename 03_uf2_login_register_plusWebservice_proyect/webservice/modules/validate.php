<?php
//////////////////////////////////////////////////////
function _ValidateMethodExists($pMethod){

    $method_list = array('lcase', 'ucase', 'reverse','length','capitalize','inString','equals', 'sumar','restar','multiplicar', 'date', 'isType');

    if (in_array($pMethod, $method_list, TRUE)) {
        return 0;
    } else {
        return 5001;
    };
};
//////////////////////////////////////////////////////
function _ValidateParamsForThisMethod($pMethod, $pP1,$pP2){
    $err=999999;
    $err2=99999999;
    $err1=9999999;
    switch ($pMethod){
        case "lcase":
            $err=ValidString($pP1);
            break;
        case "ucase":
            $err=ValidString($pP1);
            break;
        case "reverse":
            $err=ValidString($pP1);
            break;
        case "length":
            $err=ValidString($pP1);
            break;
        case "capitalize":
            $err=ValidString($pP1);
            break;
        case "inString":
            $err=ValidString($pP1);
            break;
        case "equals":
            $err=ValidString($pP1);
            break;


        //NUMERIC FUNCTIONS
        case "sumar":
            $err1=ValidNumber($pP1);
            $err2=ValidNumber($pP2);
            if($err1==0 and $err2==0){
                $err=0;
            }else{
                $err=6000;
            };
            break;
        case "restar":
            $err1=ValidNumber($pP1);
            $err2=ValidNumber($pP2);
            if($err1==0 and $err2==0){
                $err=0;
            }else{
                $err=6000;
            };
            break;
        case "multiplicar":
            $err1=ValidNumber($pP1);
            $err2=ValidNumber($pP2);
            if($err1==0 and $err2==0){
                $err=0;
            }else{
                $err=6000;
            };  
            break;
        case "isType":
            $err=validString($pP1);
            if ($err==6000){
                $err= 1;
            };
            // $aux=ValidString($pP1);
            // if ($aux!=0){
            //     $aux=ValidNumber($pP1);
            //     $err=$aux;
            // }else{
            //     $err=$aux;
            // };
            // break;
    };
    return $err;
};

//////////////////////////////////////////////////////
$err= _ValidateMethodExists($method);

if ($err==0){
   $err= _ValidateParamsForThisMethod($method,$p1,$p2,$p3);
}else{
    $message="Metodo mal introducido";
};
?>