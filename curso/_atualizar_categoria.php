<?php 

include 'conexao.php';

$id = $_POST['id'];
$categoria = $_POST['categoria'];

$sql = "UPDATE `categoria` SET `nome_categoria`='$categoria' WHERE id_categoria = $id"; // update na tabela

$atualizar = mysqli_query($conexao, $sql); 

?>

<?php include 'style.php'; ?>

<div class="container">
    <center>
        <h3>Atualizado com sucesso!</h3>
        <a href="listar_categorias.php" class="btn btn-warning text-white">Voltar</a>
    </center>
</div>