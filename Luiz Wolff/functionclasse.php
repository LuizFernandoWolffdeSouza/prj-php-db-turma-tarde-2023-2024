<?php 
include('conexão.php');
  class classeDados{

     public static 
     function dados($login, $senha) {
            $consulta = "SELECT * FROM tb_usuarios WHERE ";
            $resultusuarios = $mysqli -> query($consulta) or die ($mysqli->error);
            if ($resultusuarios == $consulta) {
                return$resultusuarios;
            }
            elseif($senha == $consulta){
                return $resultusuarios;

            }
     }

     public static function inserirclientes($mysqli, $nome, $cpf , $datanasc, $fone, $endereço, $numcasa, $cidadeid , $tipo, $bairro ){
      $inserircliente = "INSERT INTO tb_usuarios
      (nome_usuario, cpf, data_nascimento, telefone, num_casa, fk_id_tb_cidades, tipo_usuario, bairro)
      VALUES
      ('$nome', '$cpf','$datanasc','$fone','$endereço','$numcasa','$cidadeid', ,'$tipo', ,'$bairro','1')";

      $sqlinserir = $mysqli -> query($inserircliente) or die ($mysqli ->error);
      return $sqlinserir;
     }

  }

?>