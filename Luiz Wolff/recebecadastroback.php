<?php
include('conexão.php');


$usuario = $_GET['usuario'];
$cpf = $_GET['cpf'];
$nascimento = $_GET['nasci'];
$telefone = $_GET['telefone'];
$endereço = $_GET['endereço'];
$casa = $_GET['casa'];
$idcidade = $_GET['idcidade'];
$tipo = $_GET['tipo'];
$login = $_GET['login'];
$senha = $_GET['senha'];
$ativo = $_GET['ativo'];
$bairro = $_GET['bairro'];
$usuarios = classeDados::($mysqli, $login, $senha);


echo " bem vindo"























?>
    <title>Relatório de Usuários</title>



<!-- <table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>tipo de Usuário</th>
        </tr>
    </thead>
        <tbody>
           
            <td><?php echo  "id"?></td>
            <td><?php echo  "nome_usuario"?></td>
            <td><?php echo  "tipo_usuario"?></td>
             <td><button onclick="inativo()">Inativ</button></td>
            <td><button onclick="atualizar()">Atualizar</button></td> -->

            

        </tbody>
                
        </tr>
    </table>
</body>
</html>
<script> 
</script>
