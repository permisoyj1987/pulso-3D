<?php

$ar=fopen("pedido.txt","a") or die ("error al enviar");

$celular=$_REQUEST['celular'];
$pedido=$_REQUEST['pedido'];


fwrite($ar,$celular);
fwrite($ar,'--');
fwrite($ar,$pedido);
fwrite($ar,'--');

header("location:https://wwwpulso3dcomcomentarios.000webhostapp.com/");


?>