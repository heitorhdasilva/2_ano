<?php
$palavra2 = '';
$palavra = "ovo";
$inversa = '';
for ($i = 2; $i >=0 ; $i--) {
    $inversa .= $palavra[$i];
}


if ($inversa != $palavra){
    echo "A palavra não é palindroma";
}else{
    echo "A palavra é palindroma";
}