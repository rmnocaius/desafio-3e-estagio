<?php

    $link = new mysqli('localhost:3306','root','senhasenha','db_Dados');

    if($link->connect_errno)
    {
        echo "ERRO, Banco de dados não conectou";
    }else{
        echo "";
    }




?>