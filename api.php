<?php

$lista = $_GET['lista'];

function encripta($senha){

    $enc = $_GET['enc'];
    $return = $_GET['return'];
    $type = $_GET['type'];

    $salt = $enc($return, $type);

    $codifica = crypt($senha,$salt);

    $codifica = hash('sha512',$codifica);

    return $codifica;

}

echo encripta($lista);
