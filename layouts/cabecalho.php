<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Spotify</title>
  </head>
  <body>
    <div class="container-fluid py-3 navegacao-superior"><!-- Navegação Superior-->
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="./imagens/spotify-logo-branca-white.png" alt="logo" class="logo">
          </a>
          <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">
                  <strong>Premium</strong>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <strong>Suporte</strong>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <strong>Baixar</strong>
                </a>
              </li>
                <span>|</span>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                  <img src="./icones/account_circle-24px.svg" alt="Foto" class="icone-usuario-pequeno">
                  <strong>Perfil</strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li>
                    <a class="dropdown-item" href="#">
                      <strong>Conta</strong>
                    </a>
                 </li>
                  <li>
                    <a class="dropdown-item sair" href="index.php">
                      <strong>Sair</strong>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>