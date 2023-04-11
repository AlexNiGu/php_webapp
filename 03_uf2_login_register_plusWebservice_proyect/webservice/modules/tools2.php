<?php
function ValidString($pValue){
    if (strlen($pValue)<1 || is_numeric($pValue)== TRUE){
        return 6000;
    }else{
        return 0;
    };
};
function ValidNumber($pValue){
    if (is_numeric($pValue) == FALSE){
        return 6000;
    }else{
        return 0;
    };
};
?>