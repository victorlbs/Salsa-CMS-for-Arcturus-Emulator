 <nav id="sombra" class="navbar navbar-expand-lg navbar-light bg-light ">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                   <li  class="nav-item dropdown ">
        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo usuario ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/me">Principal</a>
          <a class="dropdown-item" href="/perfil?=<?php echo usuario ?>">Meu perfil</a>
          <a class="dropdown-item" href="/config">Configurações</a>
          <?php if ($rank >= $config['painel.rankminimo'])
          {
            echo '<a class="dropdown-item" href="/panel">Painel de Controle</a>';
          }
          ?>
          <a class="dropdown-item" href="/sair">Sair</a>
        </div>
      </li>



      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Comunidade
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/equipe">Equipe</a>
          <a class="dropdown-item" href="/colaboradores">Colaboradores</a>
          <?php
      $sql = "SELECT * FROM cms_news order by id DESC LIMIT 1";
      $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      $row = $query->fetch_assoc();
      {
        ?>
          <a class="dropdown-item" href="/noticia?=<?php echo $row['id'] ?>">Notícias</a>
      <?php } ?>
          <a class="dropdown-item" href="/hall">Hall da Fama</a>
          <a class="dropdown-item" href="/vipers">Usuários VIP's</a>
        </div>
      </li>









       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Loja
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/produtos">Produtos disponíveis</a>
          <a class="dropdown-item" href="/loja">Comprar VIP</a>
        </div>
      </li>

      






      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Redes sociais
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo $config['tema.facebook'] ?>">Facebook</a>
          <a class="dropdown-item" href="<?php echo $config['tema.twitter'] ?>">Twitter</a>
          <a class="dropdown-item" href="<?php echo $config['tema.discord'] ?>">Discord</a>
        </div>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="/registro">Entrar no <?php echo nome ?></a>
      </li>




                   

                </ul>

            </div>
        </nav>