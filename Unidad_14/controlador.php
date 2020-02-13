<?php
//el controlador es el que controla el modelo, funciones

require('modelo.php');

function devolverArray($query){

    return mysqli_fetch_array($query);
    
} 
?>