<?php
require_once '../ClasesBasicas/ConsultaBD.php';
$descripcion = utf8_decode($_GET['descripcion']);
$sql = "select * from tipo_recetas where descripcion='$descripcion'";
 $conexion = new ConsultaBD();
$conexion->Conectar();
$conexion->executeQuery($sql);
if($conexion->getNumRows() == 0)
        echo "true";
else
        echo "false";
?>