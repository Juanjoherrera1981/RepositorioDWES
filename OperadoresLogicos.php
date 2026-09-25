<?php
$logueado=true;
$administrador=true;
$voluntario=false;

echo "Estas logueado y eres administrador";
var_dump($logueado&&$administrador);
echo "Eres administrador o voluntario?";
var_dump($administrador||$voluntario);
echo "Estas logueado?";
var_dump(!$logueado);
echo "Eres aministrador o voluntario?";
var_dump($administrador xor $voluntario) ;
// comentario

?>