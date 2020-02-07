<?php

    include 'conexao.php';

    $nomecategoria = $_POST['categoria'];

    $sql = "INSERT INTO `categoria`(`nome_categoria`) VALUES ('$nomecategoria')";

    $inserir = mysqli_query($conexao, $sql);
?>

<?php include 'style.php'; ?>

<div class="container">
    <center>
        <h3>Categoria inserida com sucesso!</h3>
        <a href="adicionar_categoria.php" class="btn btn-warning text-white">Voltar</a>
    </center>
</div>