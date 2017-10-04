<?php

/**
 * @param $data
 */
function mes($data)
{
    $mes = explode("/", $data);

    switch ($mes[1]) {
        case 01:
            echo $mes[0] . ", janeiro, " . $mes[2];
            break;
        case 02:
            echo $mes[0] . ", fevereiro, " . $mes[2];
            break;
        case 03:
            echo $mes[0] . ", março, " . $mes[2];
            break;
        case 04:
            echo $mes[0] . ", abril, " . $mes[2];
            break;
        case 05:
            echo $mes[0] . ", maio, " . $mes[2];
            break;
        case 06:
            echo $mes[0] . ", junho, " . $mes[2];
            break;
        case 07:
            echo $mes[0] . ", julho, " . $mes[2];
            break;
        case 8:
            echo $mes[0] . ", agosto, " . $mes[2];
            break;
        case 9:
            echo $mes[0] . ", setembro, " . $mes[2];
            break;
        case 10:
            echo $mes[0] . ", outubro, " . $mes[2];
            break;
        case 11:
            echo $mes[0] . ", novembro, " . $mes[2];
            break;
        case 12:
            echo $mes[0] . ", dezembro, " . $mes[2];
            break;
    }
}

mes("03/09/2014");