<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include 'style.php' ?>

    <title>Menu</title>
</head>
<body>
    
    <div class="container">
    
        <div class="row mt-5">
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Adicionar produto</h5>
                    <p class="card-text">Opção para adicionar produtos no estoque.</p>
                    <a href="adicionar_produto.php" class="btn btn-primary">Adicionar</a>
                </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Adicionar Categoria</h5>
                    <p class="card-text">Adiciona categoria dos produtos.</p>
                    <a href="adicionar_categoria.php" class="btn btn-primary">Adicionar</a>
                </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Adicionar Fornecedor</h5>
                    <p class="card-text">Opção para adicionar fornecedores.</p>
                    <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedor</a>
                </div>
                </div>
            </div>

            <div class="col-sm-4 mt-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de produtos</h5>
                    <p class="card-text">Visualizar, editar e excluir os produtos.</p>
                    <a href="listar_produtos.php" class="btn btn-primary">Listar</a>
                </div>
                </div>
            </div>

            <div class="col-sm-4 mt-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de categorias</h5>
                    <p class="card-text">Visualizar, editar e excluir categorias.</p>
                    <a href="listar_categorias.php" class="btn btn-primary">Listar</a>
                </div>
                </div>
            </div>

            <div class="col-sm-4 mt-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de fornecedores</h5>
                    <p class="card-text">Visualizar, editar e excluir fornecedores.</p>
                    <a href="listar_produtos.php" class="btn btn-primary">Listar</a>
                </div>
                </div>
            </div>

        </div>

    </div>

<?php include 'scripts.php' ?>
</body>
</html>