<?php
include 'conexao.php';
$filtro = 'ativo';

$sql = "SELECT * FROM tb_usuarios WHERE filtro = null";

$result = $mysqli->query($sql);

if($sql ==  $filtro) {
  echo "ativo";
}


?>
