<?php

    include 'conexao.php';

    $nomefornecedor = $_POST['fornecedor'];

    $sql = "INSERT INTO fornecedor(nome_fornecedor) VALUES ('$nomefornecedor')";

    $inserir = mysqli_query($conexao, $sql);
?>

<?php include 'style.php'; ?>

<div class="container">
    <center>
        <h3>Fornecedor inserido com sucesso!</h3>
        <a href="adicionar_fornecedor.php" class="btn btn-warning text-white">Voltar</a>
    </center>
</div>