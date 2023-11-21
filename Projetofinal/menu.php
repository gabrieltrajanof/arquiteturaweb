<?php
          $sql = mysqli_query($conexao,"SELECT nome,link FROM paginas ORDER BY id");
          while($tabela = mysqli_fetch_array($sql)){
        echo "<li><a href=?pg=$tabela[link]>$tabela[nome]</a></li>";
      }
        ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="?pg=principal">MENU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pg=sobre">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pg=frp">Formulário de Requisição Projetual</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pg=projetos">Projetos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pg=contatos">Contatos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pg=faq">F.A.Q</a>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin/index.php">ADMIN</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>