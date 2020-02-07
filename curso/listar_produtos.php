<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Produtos</title>

    <?php include 'style.php'; ?>
</head>
<body>

<div class="container">

    <h3 class="mt-3">Lista de Produtos</h3>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Número Produto</th>
                <th scope="col">Nome do Produto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexao.php';
                $sql = "SELECT * FROM `estoque`";
                $busca = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($busca)) {
                    $id_estoque = $array['id_estoque'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];
                
            ?>

            <tr>
                <td><?php echo $nroproduto ?></td>
                <td><?php echo $nomeproduto ?></td>
                <td><?php echo $categoria ?></td>
                <td><?php echo $quantidade ?></td>
                <td><?php echo $fornecedor ?></td>     
                <td>
                    <a href="editar_produto.php?id=<?php echo $id_estoque ?>" class="btn btn-warning text-white" role="button">Editar</a>
                    <a href="deletar_produto.php?id=<?php echo $id_estoque ?>" class="btn btn-danger text-white" role="button">Deletar</a>
                </td>       
            </tr>

            <?php } ?>
        </tbody>
    </table>

    <div>
        <a href="index.php" role="button" class="btn btn-danger">Voltar</a>
    </div>

</div>
    
<?php include 'scripts.php'; ?>

</body>
</html>