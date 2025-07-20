<?php
require_once 'vendor/autoload.php';


session_start();

$cliente = new Google_Client();
$cliente->setClientId('Coloque o seu Client Id aqui');
$cliente->setClientSecret('Coloque o seu Client Secrect aqui');
$cliente->setRedirectUri('Coloque a sua URL de direcionamento aqui');

if(isset($_GET['code'])){
    $token = $cliente->fetchAccessTokenWithAuthCode($_GET['code']);
     if (!isset($token['error'])) {
        $cliente->setAccessToken($token['access_token']);

        $oauth = new Google_Service_Oauth2($cliente);
        $userinfor = $oauth->userinfo->get();

        $_SESSION['user_email'] = $userinfor->email;
        $_SESSION['user_name'] = $userinfor->name;
        $_SESSION['user_picture'] = $userinfor->picture;

        header('location: index.php');
        exit;
} else {
    echo "Erro ao tentar autenticar pelo o Google.";
}
} else {
    echo "Código de autorização não fornecido!";
}

?>