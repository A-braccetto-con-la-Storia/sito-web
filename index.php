<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="it">

<? require_once "./templates/templates.php";?>

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    A braccetto con la Storia
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <link href="./assets/css/scroll.css" rel="stylesheet" />
  <link href="./assets/css/post.css" rel="stylesheet" />
  <link href="./assets/css/podcast.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <? echo $navbar; ?>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/header.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <h1 class="h1-seo">A braccetto con la Storia</h1>
          <h3>Storia, Aneddoti, Curiosità</h3>
        </div>
        <section id="section05" class="demo">
          <a href="#articoli" onclick="scrollToArticoli()"><span></span></a>
        </section>
      </div>
    </div>
    <div class="main" id="articoli">
      <div class="section section-basic" id="basic-elements">
        <div class="container">
          <h3 class="title">Inchiostro fresco per te</h3>
          <hr>
          <p style="text-align: center;">Visualizza tutti gli articoli</p>
          <div style="height: 10%;"></div>
          <div class="container">
            <div class="row">
              <div class="col">
                  <!-- Post-->
                  <div class="post-module">
                    <!-- Thumbnail-->
                    <div class="thumbnail">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                    </div>
                    <!-- Post Content-->
                    <div class="post-content">
                      <div class="category">Accadde oggi</div>
                      <h1 class="title">Articolo #1</h1>
                      <h2 class="sub_title" style="text-align: center; font-size: 15px;">di Nicola Deidda</h2>
                      <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                      <div class="post-meta">
                        <span class="timestamp">
                          <i class="far fa-calendar-alt"></i> 20/07/2021
                        </span>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col">
                  <!-- Post-->
                  <div class="post-module">
                    <!-- Thumbnail-->
                    <div class="thumbnail">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                    </div>
                    <!-- Post Content-->
                    <div class="post-content">
                      <div class="category">Reportage</div>
                      <h1 class="title">Articolo #1</h1>
                      <h2 class="sub_title" style="text-align: center; font-size: 15px;">di Nicola Deidda</h2>
                      <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                      <div class="post-meta">
                        <span class="timestamp">
                          <i class="far fa-calendar-alt"></i> 20/07/2021
                        </span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row"></div>
            <div class="row">
              <div class="col">
                  <!-- Post-->
                  <div class="post-module">
                    <!-- Thumbnail-->
                    <div class="thumbnail">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                    </div>
                    <!-- Post Content-->
                    <div class="post-content">
                      <div class="category">Accadde oggi</div>
                      <h1 class="title">Articolo #1</h1>
                      <h2 class="sub_title" style="text-align: center; font-size: 15px;">di Nicola Deidda</h2>
                      <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                      <div class="post-meta">
                        <span class="timestamp">
                          <i class="far fa-calendar-alt"></i> 20/07/2021
                        </span>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col">
                  <!-- Post-->
                  <div class="post-module">
                    <!-- Thumbnail-->
                    <div class="thumbnail">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                    </div>
                    <!-- Post Content-->
                    <div class="post-content">
                      <div class="category">Reportage</div>
                      <h1 class="title">Articolo #1</h1>
                      <h2 class="sub_title" style="text-align: center; font-size: 15px;">di Nicola Deidda</h2>
                      <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                      <div class="post-meta">
                        <span class="timestamp">
                          <i class="far fa-calendar-alt"></i> 20/07/2021
                        </span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section id="podcast">
        <h3 class="title">Il nostro podcast</h3>
        <hr>
        <p style="text-align: center;">
          Pensato per chiunque voglia rilassarsi con qualche pillola di storia.<br>
          Ogni episodio del podcast si basa su <b>canovacci esclusivi</b>, che successivamente vengono adattati per diventare articoli da leggere.
          <br><a href="./podcast/">Scopri di più</a>
        </p>
        <h4 style="text-align: center;">Non dimenticarti di seguirci sulle altre piattaforme</h4>
        <div class="podcast">
          <div class="box">
            <div class="boxContent">
              <i class="fa fa-spotify icon"></i>
              <h1 class="title">Spotify</h1>
            </div>
            <a href="#"></a>
          </div>
          <div class="box">
            <div class="boxContent">
              <i class="fa fa-google icon"></i>
              <h1 class="title">Google Podcast</h1>
            </div>
            <a href="#"></a>
          </div>
          <div class="box">
            <div class="boxContent">
              <i class="fa fa-podcast icon"></i>
              <h1 class="title">Apple Podcast</h1>
            </div>
            <a href="#"></a>
          </div>
        </div>
      </section>
      <div style="height: 10rem"></div>
      <section id="altro">
        <h3 class="title">Interessato ad altri aspetti del progetto?</h3>
        <hr>
        <div class="podcast">
          <div class="box">
            <div class="boxContent">
              <i class="fa fa-users icon"></i>
              <h1 class="title">Chi siamo</h1>
            </div>
            <a href="#"></a>
          </div>
          <div class="box">
            <div class="boxContent">
              <i class="fa fa-newspaper icon"></i>
              <h1 class="title">Blog</h1>
            </div>
            <a href="#"></a>
          </div>
          <div class="box">
            <div class="boxContent">
              <i class="fa fa-telegram icon"></i>
              <h1 class="title">Telegram</h1>
            </div>
            <a href="#"></a>
          </div>
          <div class="box">
            <div class="boxContent">
              <i class="fa fa-envelope icon"></i>
              <h1 class="title">Contattaci</h1>
            </div>
            <a href="#"></a>
          </div>
        </div>
      </section>
      <div style="height: 10rem"></div>
    <? echo $footer; ?>
  </div>
  <!--   Core JS Files   -->
  <script src="https://kit.fontawesome.com/91d2f95ec2.js" crossorigin="anonymous"></script>
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script src="./assets/js/plugins/scroll.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/post.js" type="text/javascript"></script>
</body>

</html>