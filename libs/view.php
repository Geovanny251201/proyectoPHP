<?php

class view {

    function __construct()
    {
        
    }

    function render($nombre){
        require 'view/'.$nombre.'.php';
    }
}


?>

