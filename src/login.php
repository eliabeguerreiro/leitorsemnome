<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <center>
        <h2>Entrar</h2>
        <?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>
        <p>
            <form method="POST" action="valida.php">
                <label>Usuário</label>
                <input type="email" name="email" placeholder="Digite o seu email">

                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite a sua senha">
                <br>
                <input type="submit" name="btnLogin" value="Acessar">

                <h4>Ainda não possui uma conta?</h4>
                <a href="cadastrar.php">Crie grátis</a>

            </form>
            <br>
    </center>
</body>

</html>