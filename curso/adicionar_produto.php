<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu primeiro Script de PHP</title>

    <?php include 'style.php'; ?>

</head>
<body>

<div class="container mt-4 tamanhoDiv">
    <h4 class="mb-4">Formulário de cadastro</h4>
    <form action="_inserir_produto.php" method="post">
        <div class="form-group">
            <label>Número do Produto</label>
            <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label>Nome do Produto</label>
            <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label>Categoria</label>
            <select class="form-control" name="categoria">
                <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                $buscar = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($buscar)) {
                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];     
                ?>

                <option><?php echo $nome_categoria ?></option>
                
                <?php } ?>

            </select>
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label>Fornecedor</label>
            <select class="form-control" name="fornecedor">

                <?php
                include 'conexao.php';
                $sql2 = "SELECT * FROM fornecedor order by nome_fornecedor ASC";
                $buscar2 = mysqli_query($conexao, $sql2);

                while($array2 = mysqli_fetch_array($buscar2)) {
                    $id_fornecedor = $array2['id_fornecedor'];
                    $nome_fornecedor = $array2['nome_fornecedor'];

                ?>

                <option><?php echo $nome_fornecedor ?></option>

                <?php } ?>
                
            </select>
        </div>

        <a href="index.php" role="button" class="btn btn-danger">Voltar</a>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>

<?php include 'scripts.php'; ?>

</body>
</html>