<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header('location: login.php');
    exit;
} 


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url('https://media.giphy.com/media/oYQ9HRm5Mo7VXeMNVR/giphy.gif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 20px;
            text-align: center;
        }

        h1, h2 {
            margin-bottom: 1rem;
        }

        img {
            border-radius: 50%;
            border: 3px solid #fff;
            margin-bottom: 1.5rem;
        }

        a {
            text-decoration: none;
            background-color: #0e0d0d4d;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        a:hover {
            background-color: #0f0f0fff;
        }

        .container {
            background-color: rgba(30, 30, 30, 0.85);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Seja bem-vindo: <?= htmlspecialchars($_SESSION['user_name']) ?>!</h1>
        <img src="<?= $_SESSION['user_picture'] ?>" alt="Avatar" width="200">
        <h2>Email: <?= htmlspecialchars($_SESSION['user_email']) ?></h2>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>