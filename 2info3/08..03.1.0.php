<?php
echo "CODIGO DE ORIGEM MEN KK: ";
$origem = fgets(STDIN);
switch ($origem){
    case 1:
        echo "SUL";
        break;
    case 2:
        echo "NORTE";
        break;
    case 3:
        echo "NORDESTE";
        break;
    case 4:
    case 5:
    case 6:
        echo "SUDESTE";
        break;
    case 7:
    case 8:
    case 9:
        echo "CENTRO-OESTE";
    break;
    default:
        echo "deuMerda Meu Qrido";

}