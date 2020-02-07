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

    <?php include 'style.php' ?>

    <title>Editar Categoria</title>
</head>
<body>

    <div class="container mt-4 tamanhoDiv">
        <h4>Edição da Categoria</h4>

        <form action="_atualizar_categoria.php" method="post">

            <?php 
                $sql = "SELECT * FROM categoria WHERE id_categoria = $id";
                $buscar = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($buscar)) {
                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];
                }
            ?>

            <input type="number" class="form-control" name="id" value="<?php echo $id_categoria ?>" hidden> 

            <div class="form-group">
                <input type="text" name="categoria" class="form-control" value="<?php echo $nome_categoria ?>" placeholder="Categoria" autocomplete="off">
            </div>

            <a href="listar_categorias.php" role="button" class="btn btn-danger">Voltar</a>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>    
    </div>
    

    <?php include 'scripts.php' ?>
</body>
</html>