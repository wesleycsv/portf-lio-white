<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="./resources/css/style.css">
  <title>Painel Administrativo</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <h1><span>Wes</span>ley Santos</h1>
      <nav>
        <ul id="menu-princial" group="teste" class="menu-principal">
          <li><a ref_menu="inicio" menu_sys="inicio" href="./index.php">Incio</a></li>
          <li><a href="./experiencia.php">Experiência</a></li>
          <li><a href="#">Formações</a></li>
          <li><a href="#">Sair</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container dashboard">
    <div class="dash-avatar">
      <div class="avatar">
        <img src="./resources/img/avatar.png" alt="">
        <h2>Olá, Wesley</h2>
      </div>
      <ul class="dash-menu" group="teste" id="menu-dash">
        <li><a ref_menu="inicio" href="./index.php"><i class="fa-solid fa-house"></i> Incio</a></li>
        <li><a href="./experiencia.php"><i class="fa-solid fa-computer"></i> Experiência</a></li>
        <li><a href="./perfil.php"><i class="fa-solid fa-user"></i> Perfil</a></li>
        <li><a href="#"><i class="fa-solid fa-building-columns"></i> Formações</a></li>
        <li><a href="#"><i class="fa-solid fa-xmark"></i> Sair</a></li>
      </ul>
    </div>
    <div class="dash-conteudo">
      <div class="inicio-conteudo">
        <div class="title-geral">
          <h2><i class="fa-solid fa-house"></i> Inicio</h2>
        </div>
        <div class="title-form">
          <span>Reset para o original Titulo</span>
          <p>Desenvolvedor Front-End & Back-End.</p>
        </div>
        <form action="">
          <label for="titulo">Titulo</label>
          <input type="text" id="titulo" name="titulo">
          <div class="title-form">
            <span>Reset para o original texto</span>
            <p>Desenvolvo projetos como este utilizando apenas HTML, CSS e JavaScript. Para sistemas web como rede social, lojas virtuais, e entre outros sob demanda, trabalho com php, mysql e na prototipagem utilizo o software o Figma.</p>
          </div>
          <label for="descricao">Descrição</label>
          <textarea name="descricao" id="descricao" rows="10"></textarea>
          <button type="submit">Atualizar</button>
        </form>
      </div>
    </div>
  </main>

  <script src="./resources/js/app.js"></script>
</body>

</html>