<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu primeiro Script de PHP</title>

    <?php include 'style.php'; ?>

     <style type="text/css">
        .tamanhoDiv {
            max-width: 500px;
        }
     </style>

</head>
<body>

<div class="container mt-4 tamanhoDiv">
    <h4 class="mb-4">Formulário de cadastro</h4>
    <form action="_atualizar_produto.php" method="post">

        <?php
            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
            $burcar = mysqli_query($conexao, $sql); // utiliza a conexão com o banco, e passa a query programada na variável

            while($array = mysqli_fetch_array($burcar)) { // salva no array cada informação dentro do loop
                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];        
        ?>        

        <input type="number" class="form-control" name="id" value="<?php echo $id_estoque ?>" hidden>

        <div class="form-group">
            <label>Número do Produto</label>
            <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
        </div>

        <div class="form-group">
            <label>Nome do Produto</label>
            <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
        </div>

        <div class="form-group">
            <label>Categoria</label>
            <select class="form-control" name="categoria">
                <option>Periféricos</option>
                <option>Hardware</option>
                <option>Software</option>
                <option>Celulares</option>
            </select>
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
        </div>

        <div class="form-group">
            <label>Fornecedor</label>
            <select class="form-control" name="fornecedor">
                <option>Fornecedor A</option>
                <option>Fornecedor B</option>
                <option>Fornecedor C</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Editar</button>

        <?php } ?>
    </form>
</div>

<?php include 'scripts.php'; ?>

</body>
</html>