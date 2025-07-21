<?php
require_once 'vendor/autoload.php';
$cliente = new Google_Client();
$cliente->setClientId('Coloque o seu Client Id aqui');
$cliente->setClientSecret('Coloque o seu Client Secrect aqui');
$cliente->setRedirectUri('Coloque a sua URL de direcionamento aqui');
$cliente->addScope('email');
$cliente->addScope('profile');

$authUrl = $cliente->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com o Google</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: monospace;
        }

        body {
            background-color: #121212;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            flex-wrap: wrap;
            background-image:linear-gradient(rgba(18, 18, 18, 0.9), rgba(18, 18, 18, 0.9)), url('https://media.giphy.com/media/oYQ9HRm5Mo7VXeMNVR/giphy.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        form {
            background-color: #1e1e1e6b;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(238, 238, 238, 0.28);
            width: 300px;
            text-align: center;
            margin-top: 50px;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: none;
            border-radius: 4px;
            background-color: #2c2c2c3f;
            color: #fff;
        }

        p {
            margin: 1rem 0;
            font-size: 14px;
            color: #aaa;
        }

        .google-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: black;
            color: #444;
            border: none;
            border-radius: 4px;
            padding: 10px 16px;
            font-size: 14px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .google-btn:hover {
            background-color: #eee;
        }

        .google-btn img {
            height: 18px;
            margin-right: 0px;
        }
        h1{
            font-size: 60px;
        }
        .custom-btn {
        background-color: #000000ff;
        color: #ffffffff;
        padding: 10px 40px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-family: monospace;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        margin-top: 10px;
}

        .custom-btn:hover {
        background-color: #00000080;
        transform: scale(1.03);
}

    </style>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="index.php" method="post">
        <input type="email" placeholder="Email ou nome" name="username" required>
        <input type="password" placeholder="Senha" name="password" required>
        <button class="custom-btn">Cadastre-se</button>
        <p>ou</p>
        <a href="<?= htmlspecialchars($authUrl) ?>" class="google-btn">
            <img src="google.png" alt="Google logo">Cadastre-se com o google
        </a>
    </form>
</body>
</html>
