<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include 'style.php' ?>

    <title>Adicionar Categoria</title>
</head>
<body>

    <div class="container mt-4 tamanhoDiv">
        <h4>Cadastro de Categoria</h4>

        <form action="_inserir_categoria.php" method="post">
            <div class="form-group">
                <input type="text" name="categoria" class="form-control" placeholder="Categoria" autocomplete="off">
            </div>

            <a href="index.php" role="button" class="btn btn-danger">Voltar</a>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>    
    </div>
    

    <?php include 'scripts.php' ?>
</body>
</html>