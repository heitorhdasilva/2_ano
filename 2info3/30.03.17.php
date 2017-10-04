<?php

$nome = "Araquari";
// a visibilidade dela é fora das funcoes
// escopo global

    function informeCidade($nome){
        $nome = "Joinville";
        return $nome;
    }

   $nome = informeCidade($nome);
    echo $nome;