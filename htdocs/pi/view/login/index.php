<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../styles/header.css">
  <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
  <header>
    <div>
      <h1>Covid-19 Brasil</h1>
      <nav>
        <div>
          <ul class="navbar">
            <li>
              <a href="../" class='bold'>Início</a>
            </li>
            <li>
              <a href="../prevencoes" class='bold'>Prevenções</a>
            </li>
            <li>
              <a href="../atendimento" class='bold'>Atendimento profissional</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div>
      <a href="../registrar" class='bold'>Registrar</a>
      <a href="#" class='bold'>| Login</a>
    </div>
  </header>
  <body>
    <main>
      <h2>Login</h2>
      <form action="../../controller/loginController.php" method="post">
        <div class=pages_group>
          <div class=form_page>
            <label>
              <span>E-mail:</span>
              <input type="email" name="email" id="email" placeholder='yourname@mail.com' required maxlength="250" />
            </label>
            <label>
              <span>Senha:</span>
              <input type="password" name='senha' id="senha" placeholder='*******' minlength="8" maxlength="250" required />
            </label>
            <div class=buttons>
              <input class=button type="submit" value="Entrar" />
            </div>
          </div>
        </div>
      </form>
    </main>
  </body>
</body>
</html>