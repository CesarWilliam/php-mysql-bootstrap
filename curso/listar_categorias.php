<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Categorias</title>

    <?php include 'style.php'; ?>
</head>
<body>

<div class="container">

    <h3 class="mt-3">Lista de Categorias</h3>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" colspan="2">Nome Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexao.php';
                $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                $busca = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($busca)) {
                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];
                
            ?>

            <tr>
                <td><?php echo $nome_categoria ?></td>  
                <td>
                    <a href="editar_categoria.php?id=<?php echo $id_categoria ?>" class="btn btn-warning text-white" role="button">Editar</a>
                    <a href="deletar_categoria.php?id=<?php echo $id_categoria ?>" class="btn btn-danger text-white" role="button">Deletar</a>
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