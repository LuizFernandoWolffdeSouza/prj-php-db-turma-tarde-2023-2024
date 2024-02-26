<?php
include 'conexão.php';
include("cabeçalho.php");


    $sql = "UPDATE usuarios SET status='inativo' WHERE id = $id_usuario";
    $resultusuarios = $mysqli -> query($usuarios) or die ($mysqli->error);

    if ($resultusuarios == TRUE) {
      echo "Usuário inativado com sucesso";
    } else if ($resultusuarios == FALSE) {
      echo "Erro ao inativar usuário: " ;
    }
?>
