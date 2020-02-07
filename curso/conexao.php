<?php 

    $servername = 'localhost'; //padrão - server local
    $database = 'curso_estoque'; // nome do banco de dados
    $username = 'root'; // padrão - root - nome do login no mysql
    $password = ""; // senha de conexão com o mysql

    $conexao = mysqli_connect($servername, $username, $password, $database); // cria a conexão

?>