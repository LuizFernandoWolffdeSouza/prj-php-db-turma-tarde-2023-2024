<?php
require 'conexão.php';
class classeDados
{

  public static function dados($mysqli, $login, $senha)
  {
    $usuarios = "SELECT * FROM tb_usuarios WHERE login = '$login' AND senha = '$senha'";
    $resultusuarios = $mysqli->query($usuarios) or die($mysqli->error);

    return $resultusuarios;
  }

  public static function inserirclientes($mysqli, $usuario, $cpf, $nascimento, $telefone, $casa, $idcidade, $tipo, $ativo, $bairro)
  {
    $inserircliente = "INSERT INTO tb_usuarios

      (nome_usuario, cpf, data_nascimento, telefone, num_casa, bairro, fk_id_tb_cidades, tipo_usuario , ativo)
      VALUES
      ('$usuario', '$cpf','$nascimento','$telefone','$casa','$bairro','$idcidade','$tipo','$ativo')";

    $sqlinserir = $mysqli->query($inserircliente) or die($mysqli->error);


    return $sqlinserir;
  }
}
