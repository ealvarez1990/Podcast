<?php

require '../clases/AutoCarga.php';

$usuario=  Request::post("login");
$categoria=  Request::post("categoria");
$privada=  Request::post("privada");
$cancion=new FileUpload("cancion");
$portada=new FileUpload("portada");
$cancion->setDestino("mp3/");
$portada->setDestino("mp3/");
$nombreOriginal=$cancion->getNombre();
$cancion->setNombre("_U_".$usuario."_X_".$categoria."_T_".$privada."_C_".$nombreOriginal);
$cancion->getPolitica(FileUpload::RENOMBRAR);
$cancion->addTipo("mp3");
$cancion->setTamanio(52428800);

$portada->setNombre("_U_".$usuario."_X_".$categoria."_T_".$privada."_C_".$nombreOriginal."_P_".$portada->getNombre());
$portada->getPolitica(FileUpload::RENOMBRAR);
$portada->addTipo("jpg");
$portada->setTamanio(52428800);

var_dump($cancion);
echo "<br>";
var_dump($portada);

if($cancion->upload() && $portada->upload()){
    header('Location:../login/user.php?mensaje=Subido con exito&class=alert-success');
}  else {
   header('Location:../login/user.php?mensaje=Fallo en la subida&class=alert-danger');
}



