<?php

    if(isset($_POST['submit']))
    {
       //print_r('nome: '.$_POST['nome']);
        //print_r('<br>');
       // print_r('peso: '.$_POST['peso']);
       // print_r("<br>");
       // print_r('codígo: '.$_POST['cod_barra']);
       // print_r('<br>');
       // print_r('R$: '.$_POST['valor']);
        include_once('conf.php');

       $Nome = $_POST['nome'];
       $Peso = $_POST['peso'];
       $CodBarra = $_POST['cod_barra'];
       $Valor = $_POST['valor'];


       $dados = mysqli_query($link, "INSERT INTO produtos(Nome,Peso,Cod_barra,Valor)
        VALUES ('$Nome','$Peso','$CodBarra','$Valor');");
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            position: absolute;
            left: 35%;
            top: 20%;
        }
    </style>
</head>
<body>
    <a href="page.php">voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <h2>Cadastro de produtos</h2>
                <div class="inputBox">
                    <input type=" text" name="nome" id="nome">
                    <label for="name">Nome</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="peso" id="peso">
                    <label for="peso">Peso</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="cod_barra" id="cod_barra">
                    <label for="cod_barra">Codigo de barra</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="valor" id="valor">
                    <label for="valor">valor</label>
                </div><br>
                <input type="submit" name="submit" id="submit">
        </form>
        </fieldset>
    </div>
</body>
</html>