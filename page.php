<?php
    include_once('conf.php');
    $sql = "SELECT * FROM produtos ORDER BY Nome DESC";

    $dados = $link->query($sql);

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
            h2 {
                position: absolute;
                top: 1%;
                left: 30%;
                color: #202024;
            }
        </style>
  </head>
  <body>
    <div class="text-inicial">
        <h2>Lista de Produtos cadastrados</h2>
        <a href="formulario.php">cadastrar</a>
    </div><br>
    <div class="m-5">
     <table class="table text-#202024 table-rgb">
            <thead>
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Codigo de barras</th>
                    <th scope="col">Valor</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
          <tbody>
            <?php

                while($dados_banc = mysqli_fetch_assoc($dados))
                {
                    echo "<tr>";
                    echo "<td>".$dados_banc['Nome']."</td>";
                    echo "<td>".$dados_banc['Peso']."</td>";
                    echo "<td>".$dados_banc['Cod_barra']."</td>";
                    echo "<td>".$dados_banc['valor']."</td>";
                    echo "<td>
                        <a class='btn btn-primary' href='edit.php?id=$dados_banc[Cod_barra]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                        <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                        </svg>
                    </td>";
                    echo "</tr>";
                }

            ?>
          </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
  </body>
</html>