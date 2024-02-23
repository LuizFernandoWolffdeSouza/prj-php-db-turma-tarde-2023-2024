

<?php
//  include('cabeçalho.php');
$usuario = $_GET['usuario'];
$endereço = $_GET['endereço'];
$usuario = $_GET['tipo'];
?>
    <title>Relatório de Usuários</title>



<table border="1">
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
            <!-- <td><button onclick="inativo()">Inativ</button></td>
            <td><button onclick="atualizar()">Atualizar</button></td> -->

            <a href="inativar_usuario.php?id_usuario=">Inativar Usuário</a>

        </tbody>
                
        </tr>
    </table>
</body>
</html>
<script>
</script>
