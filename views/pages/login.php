<?php require '../../config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Extreme Blog | Members</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/session.css">
    <script src="<?=$base;?>/assets/js/loginForm.js" defer></script>
</head>
<body>
    <main>
        <form action="<?=$base;?>/actions/login_action.php" method="post">
            <div class="title">
                <h2>NetXB | Login</h2>
                <p>Inicie a sua sessão agora mesmo!</p>
            </div>
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Insira o seu email" data-rules="required|email">

            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Insira a sua senha" data-rules="required|min=8">

            <button>ENTRAR</button>
        </form>
    </main>
</body>
</html>