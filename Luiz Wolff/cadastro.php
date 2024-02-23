<?php
include ("cabeçalho.php");
?>
<style>
    label{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-style: normal;
        padding-left: 100px;
        color: white;
    }
    #i1{
        padding-right: 100px;

    }

    #container{
     display:grid;
     grid-template-areas:
     'grid1  grid1'
      'grid2 grid3';
     border: 5px solid blue;
     grid-gap :10px;

    }
    .grid1{
        grid-area: grid1;
        padding-right: 10px;
        
    }
    .grid2{
        grid-area: grid2;

        
    }
    .grid3{
        grid-area: grid3;
        
    }
</style>

<div id="container" >
    <div class="grid1">
        <label for="">Nome usuario:</label>
        <input type="text" placeholder="usuario"  id="i1">
    </div>
<br>
    <div class="grid2">
        <label for="">Endereço completo:</label>
        <input type="text" placeholder="endereço" id="i2">
    </div>
<br>
    <div class="grid3">
        <label for="">Tipo de usuario:</label>
        <input type="text" placeholder="tipousuario" id="i3">
           
    </div>
    <button onclick="cadastro()">enviar</button>

<script>
    function cadastro() {
        var usuario = document.getElementById('i1').value
        var endereço = document.getElementById('i2').value
        var tipousuario = document.getElementById('i3').value

        window.open(`cadastro.php?usuario=${usuario}&endereço=${endereço}&tipo=${tipousuario}`)
        
    }
</script>