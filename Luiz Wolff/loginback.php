<?php
require 'functionclasse.php';
include "conexão.php";

$login= $_GET['login1'];
$senha= $_GET['login2'];

    $usuarios = classeDados::dados($mysqli, $login, $senha);

print_r($usuarios);
     foreach ($usuarios as $usuario) {
            if ($login == $usuario['login'] && $senha == $usuario['senha']) {
                header('Location: inicial.php');
        
            }
    }




?>