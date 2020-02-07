<?php 

    include 'conexao.php';

    $nroproduto = $_POST['nroproduto']; // guarda na variável o que está inserido no input com o "name" correspondente
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    $sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) 
    VALUES ($nroproduto,'$nomeproduto','$categoria','$quantidade','$fornecedor')"; // insere os valores na tabela do banco de dados

    $inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="container">
    <h4 class="mb-3">Produto adicionado com sucesso!</h4>    
    <a href="index.php" role="button" class="btn btn-primary">Cadastrar novo item</a>
</div>