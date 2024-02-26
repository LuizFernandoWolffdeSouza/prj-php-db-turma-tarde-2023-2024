<?php 
require 'conexão.php' ;
  class classeDados{

     public static function dados($mysqli, $senha, $login, $resultusuarios ) {
            $login = "nome_usuario";
            $senha = "senha";
            $usuarios = "SELECT * FROM tb_usuarios WHERE nome_usuario = Luiz AND senha = clientemaster";
            $resultusuarios = $mysqli -> query($usuarios) or die ($mysqli->error);
            if ($usuarios ==  $login ) {
                return$usuarios . $resultusuarios;
            }
            elseif($senha == $usuarios){
                return $usuarios;

            }
     }

     public static function inserirclientes($mysqli,$usuario ,$cpf, $nascimento, $telefone,$casa, $idcidade, $tipo, $ativo, $bairro ){
      $inserircliente = "INSERT INTO tb_usuarios

      (nome_usuario, cpf, data_nascimento, telefone, num_casa, bairro, fk_id_tb_cidades, tipo_usuario , ativo)
      VALUES
      ('$usuario', '$cpf','$nascimento','$telefone','$casa','$bairro','$idcidade','$tipo','$ativo')";

        $sqlinserir = $mysqli->query($inserircliente) or die($mysqli->error);


      return $sqlinserir;
     }

  }

?>