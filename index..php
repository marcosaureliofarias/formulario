<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Cadastro de usuários</h1>
        <div class="social-media">
            <a href="#">
                <img src="imagen/google.png" alt="google">
            </a>
            <a href="#">
                <img src="imagen/facebook.png" alt="Facebook">
            </a>
            <a href="#">
                <img src="imagen/linkedin.png" alt="Linkedin">
            </a>
        </div>

        <div class="alternative">
            <span>Ou</span>
        </div>

        <form action="conexao.php" method="POST">
            <label for="name">
                <span>Nome</span>
                <input type="text" id="name" name="name">
            </label>

            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email">
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" id="password" name="password">
            </label>

            <label for="text">
                <span>CPF</span>
                <input type="text" id="text" name="text">
            </label>

            <input type="submit" value="Inscrição">
        </form>
    </main>
    <section class="imagens">
        <img src="imagen/mobile.svg" alt="Mobile">
        <div class="circle"></div>
    </section>
</body>
</html>