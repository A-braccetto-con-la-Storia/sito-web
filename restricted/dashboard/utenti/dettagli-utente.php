<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dettagli utente | A braccetto con la Storia
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="../assets/css/modal.css" rel="stylesheet" />
  <link href="../assets/css/radio-sanzione.css" rel="stylesheet" />

  <!-- Moment js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.33/moment-timezone.min.js" referrerpolicy="no-referrer"></script>

  <!-- Tabulator -->
  <link href="https://unpkg.com/tabulator-tables@4.9.3/dist/css/tabulator.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://unpkg.com/tabulator-tables@4.9.3/dist/js/tabulator.min.js"></script>
</head>

<body class="" style="margin: 1%">
  <div class="wrapper ">
    <section id="pic">
        <nav>
            <img src="../assets/img/faces/avatar.jpg" width="200" height="200" class="img-thumbnail" alt="...">
            <h2>Username</h2>
        </nav>
    </section>
  </div>

  <!-- Modal -->
  <!-- Nuovo utente -->
  <div id="nuovo-utente" class="modal fade">
    <div class="modal-dialog modal-confirm">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <div class="icon-box">
            <i class="material-icons">person_add</i>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body text-center">
          <h4>Nuovo utente</h4>	
          <p>Inserisci i dati relativi al nuovo utente</p>
          <div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">CHAT ID</span>
              <input type="text" class="form-control" placeholder="123456789" aria-label="chat_id" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
              <select class="form-select">
                <option selected>Ruolo</option>
                <option value="1">Utente</option>
                <option value="2">ecc</option>
                <option value="3">ecc</option>
              </select>
            </div>
          </div>
          <button class="btn btn-success" data-dismiss="modal"><span>Aggiungi</span></button>
        </div>
      </div>
    </div>
  </div>     

  <!-- Modifica utente -->
  <div id="edit-utente" class="modal fade">
    <div class="modal-dialog modal-confirm">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <div class="icon-box">
            <i class="material-icons">edit</i>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body text-center">
          <h4>Modifica utente</h4>
          <div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">ID</span>
              <input type="text" class="form-control" id="edit-id">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input type="text" class="form-control" id="edit-username">
            </div>
          </div>
          <button class="btn btn-success" data-dismiss="modal"><span>Modifica</span></button>
        </div>
      </div>
    </div>
  </div>

  <!-- Sanziona utente -->
  <div id="sanctions-utente" class="modal fade">
    <div class="modal-dialog modal-confirm">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <div class="icon-box">
            <i class="material-icons">report</i>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body text-center">
          <h4>Sanziona utente</h4>
          <div>
            <div>
              <input type="radio" id="radio-warn" name="sanzione" value="warn" data-icon='⚠️' title="Warn" onclick="sanziona()"/>
              <input type="radio" id="radio-ban" name="sanzione" value="ban" data-icon='⛔' title="Ban" onclick="sanziona()"/>
            </div>
            <div class="input-group">
              <span class="input-group-text">Motivazione</span>
              <textarea class="form-control" aria-label="description" id="motivazione" onkeyup="sanziona()"></textarea>
            </div>
          </div>
          <button class="btn btn-danger" data-dismiss="modal"><span>Annulla</span></button>
          <button id="sanziona-btn" class="btn btn-danger" disabled><span>Sanziona</span></button>
        </div>
      </div>
    </div>
  </div>

  <!-- Users table -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="./userEventHandler.js"></script>
  <script src="../../tools/sessionHadler.js"></script>
  <script>
    moment().format();

    //define data array
    /* var tabledata = [
        {id:134723339, username:"MrDeiv", role: "Fondatore", flag: 0, points: 0, warns: "0", status: "attivo", last_access: "20/08/2021 10:00:00"}
    ]; */

    //initialize table
    var table = new Tabulator("#users-table", {
        ajaxURL:"https://sandbox.abraccettoconlastoria.com/src/ajax/loadUsers.php",
        placeholder:"Nessun utente caricato",
       /*  data:tabledata,  */          //load row data from array
        layout:"fitColumns",      //fit columns to width of table
        responsiveLayout:"hide",  //hide columns that dont fit on the table
        tooltips:true,            //show tool tips on cells
        addRowPos:"top",          //when adding a new row, add it to the top of the table
        history:true,             //allow undo and redo actions on the table
        pagination:"local",       //paginate the data
        paginationSize:7,         //allow 7 rows per page of data
        movableColumns:true,      //allow column order to be changed
        resizableRows:true,       //allow row order to be changed
        initialSort:[             //set the initial sort order of the data
            {column:"name", dir:"asc"},
        ],
        columns:[
          {title:"ID", field:"id", sorter:"number"},
          {title:"Username", field:"username", sorter:"string"},
          {title:"Ruolo", field:"role", sorter:"string"},
          {title:"Flag", field:"flag", sorter:"number"},
          {title:"Punti", field:"points", sorter:"number"},
          {title:"Warns", field:"warns", sorter:"number"},
          {title:"Status", field:"status", sorter:"string"},
          {title:"Ultimo accesso", field:"last_access", sorter:"datetime", formatter:"datetime", /* formatterParams:{
              inputFormat:"DD/MM/YYYY HH:mm:ss",
              outputFormat:"DD/MM/YYYY HH:mm:ss",
              invalidPlaceholder:"(Data non valida)",
              timezone:"Europe/Rome",
          } */}
        ],
        rowClickMenu:[
          {
              label:"🔎 Dettagli utente",
              action:function(e, row){
                  openEditModal(row);
              }
          },
          {
              label:"📝 Modifica utente",
              action:function(e, row){
                  openEditModal(row);
              }
          },
          {
              label:"🗑️ Elimina utente",
              action:function(e, row){
                  row.delete();
              }
          },
          {
              label:"⚠️ Sanziona utente",
              action:function(e, row){
                sanctionsUser(row);
              }
          },
      ]
    });

    //trigger download of data.csv file
    document.getElementById("download-csv").addEventListener("click", function(){
        table.download("csv", "users.csv");
    });

    //trigger download of data.json file
    document.getElementById("download-json").addEventListener("click", function(){
        table.download("json", "users.json");
    });

    //trigger download of data.pdf file
    document.getElementById("download-pdf").addEventListener("click", function(){
        table.download("pdf", "users.pdf", {
            orientation:"portrait", //set page orientation to portrait
            title:"Lista utenti", //add title to report
        });
    });

    document.getElementById("reload").addEventListener("click", function(){
      table.setData("/src/ajax/loadUsers.php");
    });
  </script>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>