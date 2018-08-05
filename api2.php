<?php
error_reporting(E_ALL);

$list = $_GET['lista'];
$enc = $_GET['enc'];
$type = $_GET['type'];

$lista = urlencode($list);

if (empty($lista)){
    echo "Nenhum parametro para ser encriptado foi selecionado!";
    die();
    exit();
}
if (empty($enc)){
    echo "Nenhum parametro de encriptação foi selecionado!";
    die();
    exit();
}

echo $enc($lista, $type);
