<?php 

include 'conexao.php';

$id = $_POST['id'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`='$quantidade',`fornecedor`='$fornecedor'
 WHERE id_estoque = $id"; // update na tabela

$atualizar = mysqli_query($conexao, $sql); 

?>

<?php include 'style.php'; ?>

<div class="container">
    <center>
        <h3>Atualizado com sucesso!</h3>
        <a href="listar_produtos.php" class="btn btn-warning text-white">Voltar</a>
    </center>
</div>