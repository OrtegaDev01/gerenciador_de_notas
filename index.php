<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>
    <h1>Página de Login</h1>
    <form action="php/verify.php" method="post" id="formLogin">
        <input type="text" name="cxlogin" id="login" placeholder="Digite seu login" required>
        <input type="password" name="cxpass" id="pass" placeholder="Digite sua senha" required>
        <input type="reset" value="Cancelar"><input type="submit" value="Entrar">
    </form>
</body>
</html>