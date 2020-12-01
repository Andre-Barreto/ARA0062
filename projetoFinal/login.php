
<!--<?php session_start();
?>-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>
        <div class="container tamanho-largura">
        <h2 class="text-center">LOGIN</h2>
        <div class="d-flex justify-content-center">
            <img src="imagens/cadeado.png" width="125px" height="125px" alt="">
        </div>
        <form action="verifica.php" method="POST">
            <div class="form-group">
                <strong><label> Login do Usuário</label></strong>
                <input class="form-control" type="text" name="login" placeholder="Digite o seu login"
                    autocomplete="off" required />
            </div>

            <div class="form-group">
                <strong><label>Senha</label></strong>
                <input class="form-control" type="password" name="senha" placeholder="Digite sua senha"
                    autocomplete="off" required />
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block ">Entrar</button>
            <br>
            <p class="text-center">Feito por Jéssica</p>
        </form>
    </div>
</body>



</html>