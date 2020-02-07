<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include 'style.php' ?>

    <title>Tela de login</title>
</head>
<body>

    <div class="container mt-4">

        <form action="">
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuário">
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="text" name="usuario" class="form-control" placeholder="Senha">
            </div>

            <button type="submit" class="btn btn-success">Entrar</button>
        </form>
    
    </div>
    
<?php include 'scripts.php' ?>
</body>
</html>