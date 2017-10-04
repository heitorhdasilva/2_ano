<?php

function aletoriedade($palavra)
{
    $apalavra = str_shuffle($palavra);

    return $apalavra;

}

$res = aletoriedade("raposa");
echo $res;