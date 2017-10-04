<?php

$hora = "14:25";
$ahora = explode(":",$hora);
if ($ahora[0]>12){
    $hora = ($ahora[0]-12).":".$ahora[1]."pm";
}else{
    $hora = ($ahora[0]-12).":".$ahora[1]."am";
}


echo $hora;