<?
  session_start();
  $navbar = '<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="https://abraccettoconlastoria.com">
        A braccetto con la Storia
      </a>
      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar top-bar"></span>
        <span class="navbar-toggler-bar middle-bar"></span>
        <span class="navbar-toggler-bar bottom-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./articoli/">
            <i class="now-ui-icons education_paper"></i>
            <p>Articoli</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./podcast/">
            <i class="now-ui-icons tech_headphones"></i>
            <p>Podcast</p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
            <i class="now-ui-icons design_app"></i>
            <p>Altro</p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
            <a class="dropdown-item" href="./index.html">
              <i class="now-ui-icons education_agenda-bookmark"></i> Eventi
            </a>
            <a class="dropdown-item" target="_blank" href="https://demos.creative-tim.com/now-ui-kit/docs/1.0/getting-started/introduction.html">
              <i class="now-ui-icons business_globe"></i> Siti amici
            </a>
            <a class="dropdown-item" target="_blank" href="https://demos.creative-tim.com/now-ui-kit/docs/1.0/getting-started/introduction.html">
              <i class="now-ui-icons ui-2_chat-round"></i> Dicono di noi
            </a>
            <a class="dropdown-item" target="_blank" href="https://demos.creative-tim.com/now-ui-kit/docs/1.0/getting-started/introduction.html">
              <i class="now-ui-icons business_bulb-63"></i> Collaborazioni
            </a>
            <a class="dropdown-item" target="_blank" href="https://demos.creative-tim.com/now-ui-kit/docs/1.0/getting-started/introduction.html">
              <i class="now-ui-icons business_chart-bar-32"></i> Sponsorizzazioni
            </a>
            <a class="dropdown-item" target="_blank" href="https://demos.creative-tim.com/now-ui-kit/docs/1.0/getting-started/introduction.html">
              <i class="now-ui-icons business_money-coins"></i> Supportaci
            </a>
          </div>
        </li>';

        if (isset($_SESSION['user']))
          $login = '
          <li class="nav-item">
            <a class="nav-link" href="./restricted/user/">
              <i class="now-ui-icons users_single-02"></i>
              <p>Profilo</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./logout/">
              <i class="now-ui-icons ui-1_lock-circle-open"></i>
              <p>Logout</p>
            </a>
          </li>';
        else $login= '<li class="nav-item">
          <a class="nav-link" href="./login/">
            <i class="now-ui-icons users_circle-08"></i>
            <p>Accedi</p>
          </a>
        </li>';

        $end = '<li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Seguici su Instagram" data-placement="bottom" href="https://instagram.com/tgabcls?igshid=1r0a41wxvt0wu" target="_blank">
            <i class="fab fa-instagram"></i>
            <p class="d-lg-none d-xl-none">Instagram</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Seguici su Telegram" data-placement="bottom" href="t.me/abraccettoconlastoria" target="_blank">
            <i class="fab fa-telegram"></i>
            <p class="d-lg-none d-xl-none">Telegram</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  </nav>';

  $navbar = $navbar.$login.$end;

?>