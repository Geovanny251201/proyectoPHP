<?php

class Session{
    function __construct(){

    }
    function connectionSession(){
        if(!isset($_SESSION)){
            session_start();
        }
    }
}
?>