<?php

include_once("./conexao.php");

$sql = "DELETE FROM `produto` WHERE `produto`.`id_produto` = `name`";
$deletar = mysqli_query($con,$sql);
$registros = mysqli_num_rows($deletar);

mysqli_close($con);

?>