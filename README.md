# 🔐 Login com Google usando PHP + OAuth 2.0

Projeto simples e funcional de login com o Google utilizando PHP puro e a biblioteca oficial do Google API Client. Projeto esse para fins didáticos

---

## 🖥️ Tecnologias Utilizadas

- PHP 8.2
- Google API Client (via Composer)
- HTML5 + CSS3
- Sessões nativas do PHP

---

## 🚀 Funcionalidades

- Login via Conta Google com OAuth 2.0
- Sessão com dados do usuário (nome, e-mail, foto)
- Logout seguro com destruição de sessão
- Proteção contra XSS com `htmlspecialchars()`
- Estilo visual responsivo e agradável

---

## ⚙⚙ Como usar

1. Clone o repositório
    ```bash
    https://github.com/jpbrglp2/Login_Google_PHP

2. Instale as dependências com Composer:
    ```bash
    composer require google/apiclient:^2.0

3. Crie um projeto no Google Cloud Console:

    - Ative a People API

    - Crie um OAuth 2.0 Client ID

    - Coloque uma redirect uri ex(http://localhost/google-login/callback.php)

4. Substitua no login.php e callback.php:
   ```php
    $cliente->setClientId('SEU_CLIENT_ID'); 
    $cliente->setClientSecret('SEU_CLIENT_SECRET');
    $cliente->setRedirectUri('Coloque a sua URL de direcionamento aqui');

5. Rode o projeto localmente e seja feliz:
