<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include 'style.php' ?>

    <title>Adicionar Fornecedor</title>
</head>
<body>

    <div class="container mt-4 tamanhoDiv">
        <h4>Cadastro de Fornecedor</h4>

        <form action="_inserir_fornecedor.php" method="post">
            <div class="form-group">
                <input type="text" name="fornecedor" class="form-control" placeholder="Fornecedor" autocomplete="off">
            </div>

            <a href="index.php" role="button" class="btn btn-danger">Voltar</a>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>    
    </div>
    

    <?php include 'scripts.php' ?>
</body>
</html>