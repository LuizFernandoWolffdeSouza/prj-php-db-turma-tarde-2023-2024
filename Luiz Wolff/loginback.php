<?php
require 'functionclasse.php';
include "conexão.php";

$login= $_GET['login1'];
$senha= $_GET['login2'];

    $usuarios = classeDados::dados($mysqli, $login, $senha, $resultusuarios);
    $resultusuarios = $mysqli -> query($usuarios) or die ($mysqli->error);

     foreach ($usuarios as $usuario) {
            if (!empty ($usuario['login1']) && !empty($usuario['login2'])) {
        header('inicial.php');
        
            }
    }




?>