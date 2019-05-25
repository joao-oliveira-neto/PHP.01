<?php
function tratarNome ($nome){
    $nome = strtolower($nome);
    $nome = ucwords($nome);
    return $nome;
   }

?>