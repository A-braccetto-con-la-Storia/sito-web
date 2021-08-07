<?php


    function getNavbar($active) {
        $navbar = '
        <div class="sidebar" data-color="danger" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                A braccetto con la Storia
            </a>
            <center><h6 style="color: white;"><span class="badge bg-secondary">beta 1.0</span></h6></center>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">';

        if ($active=='dashboard')
            $dashboard = '<li class="nav-item active">
            <a class="nav-link" href="../index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>';
        else $dashboard = '<li class="nav-item ">
            <a class="nav-link" href="../index.php">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
            </a>
        </li>';

        if ($active=='utenti')
            $utenti = '<li class="nav-item active">
            <a class="nav-link" href="../utenti/index.php">
              <i class="material-icons">person</i>
              <p>Utenti</p>
            </a>
          </li>';
        else $utenti = '<li class="nav-item">
            <a class="nav-link" href="../utenti/index.php">
            <i class="material-icons">person</i>
            <p>Utenti</p>
            </a>
        </li>';

        if ($active == 'articoli')
            $articoli = '<li class="nav-item active">
                <a class="nav-link" href="../articoli/index.php">
                <i class="material-icons">feed</i>
                <p>Articoli</p>
                </a>
            </li>';
        else $articoli = '<li class="nav-item">
            <a class="nav-link" href="../articoli/index.php">
            <i class="material-icons">feed</i>
            <p>Articoli</p>
            </a>
        </li>';

        if ($active == 'podcast') 
            $podcast='<li class="nav-item active">
                <a class="nav-link" href="../podcast/index.php">
                <i class="material-icons">mic</i>
                <p>Podcast</p>
                </a>
            </li>';
        else $podcast = '<li class="nav-item ">
            <a class="nav-link" href="../podcast/index.php">
            <i class="material-icons">mic</i>
            <p>Podcast</p>
            </a>
        </li>';

        if ($active == 'newsletter') 
            $newsletter='<li class="nav-item active">
                <a class="nav-link" href="../newsletter/index.php">
                <i class="material-icons">email</i>
                <p>Newsletter</p>
                </a>
            </li>';
        else $newsletter = '<li class="nav-item">
                <a class="nav-link" href="../newsletter/index.php">
                <i class="material-icons">email</i>
                <p>Newsletter</p>
                </a>
            </li>';

        if ($active == 'eventi') 
            $eventi='<li class="nav-item active">
            <a class="nav-link" href="../eventi/index.php">
              <i class="material-icons">event</i>
              <p>Eventi</p>
            </a>
          </li>';
        else $eventi = '<li class="nav-item">
                <a class="nav-link" href="../eventi/index.php">
                <i class="material-icons">event</i>
                <p>Eventi</p>
                </a>
            </li>';

        if ($active == 'quiz') 
            $quiz='<li class="nav-item active">
            <a class="nav-link" href="../quiz/index.php">
              <i class="material-icons">quiz</i>
              <p>Quiz</p>
            </a>
          </li>';
        else $quiz = '<li class="nav-item">
                <a class="nav-link" href="../quiz/index.php">
                <i class="material-icons">quiz</i>
                <p>Quiz</p>
                </a>
            </li>';
        
        if ($active == 'sponsor') 
            $sponsor='<li class="nav-item active">
                <a class="nav-link" href="../sponsor/index.php">
                <i class="material-icons">groups</i>
                <p>Sponsor</p>
                </a>
            </li>';
        else $sponsor = '<li class="nav-item">
            <a class="nav-link" href="../sponsor/index.php">
            <i class="material-icons">groups</i>
            <p>Sponsor</p>
            </a>
        </li>';

        if ($active == 'sponsor') 
            $sponsor='<li class="nav-item active">
                <a class="nav-link" href="../sponsor/index.php">
                <i class="material-icons">groups</i>
                <p>Sponsor</p>
                </a>
            </li>';
        else $sponsor = '<li class="nav-item">
            <a class="nav-link" href="../sponsor/index.php">
            <i class="material-icons">groups</i>
            <p>Sponsor</p>
            </a>
        </li>';

        if ($active == 'cpanel') 
            $cpanel='<li class="nav-item active">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">settings</i>
              <p>Pannello di controllo</p>
            </a>
          </li>';
        else $cpanel = '<li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
            <i class="material-icons">settings</i>
            <p>Pannello di controllo</p>
            </a>
        </li>';

        $navbar= $navbar.$dashboard.$utenti.$articoli.$podcast.$newsletter.$eventi.$quiz.$sponsor.$cpanel.'
                <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">home</i>
                    <p>Torna alla Home</p>
                </a>
                </li>
            </ul>
            </div>
        </div>';

        return $navbar;
    }

?>