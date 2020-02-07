<?php

    include 'conexao.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM `categoria` WHERE id_categoria = $id";

    $deletar = mysqli_query($conexao, $sql);
?>

<?php include 'style.php'; ?>

<div class="container">
    <center>
        <h3>Deletado com sucesso!</h3>
        <a href="listar_categorias.php" class="btn btn-warning text-white">Voltar</a>
    </center>
</div>