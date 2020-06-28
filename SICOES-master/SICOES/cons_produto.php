<?php
include_once("./conexao.php");

$sql = "select * from produto";
$consulta = mysqli_query($con,$sql);
$registros = mysqli_num_rows($consulta);

mysqli_close($con);
?>