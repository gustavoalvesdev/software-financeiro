<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/login.css" />
</head>
<body>
    
    <div class="login-area">
        <form method="POST">
            <input type="email" name="email" placeholder="Digite seu e-mail" />
            <input type="password" name="password" placeholder="Digite sua senha" />
            <input type="submit" value="Entrar" /><br />
            <?php if (isset($error) && !empty($error)): ?>
                <div class="warning"><?= $error; ?></div>
                <!-- warning -->
            <?php endif; ?>
        </form>
    </div>
    <!-- login-area -->
</body>
</html>