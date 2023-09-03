<?php

function signUpUser($ml,$ps,$conps){
    if(strlen($ps) == 8 && strlen($conps)==8){
        if($ps === $conps){
            return true;
        }
    }
}

function loginUser($lgml,$ps){
    require_once 'lodge_mnger.php';
    if($lgml == $admin && $ps == $adminPass){
        return true;
    }
}

function redirect($url){

    header("Location: $url");
}

?>