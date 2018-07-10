<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <!--IE Compatibility modes-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--Mobile first-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Agrícola - @yield('title')</title>

  <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
  <meta name="author" content="">

  <meta name="msapplication-TileColor" content="#5bc0de" />
  <meta name="msapplication-TileImage" content="http://localhost:8000/assets/img/metis-tile.png" />
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="http://localhost:8000/assets/lib/bootstrap/css/bootstrap.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost:8000/assets/lib/font-awesome/css/font-awesome.css">

  <!-- Metis core stylesheet -->
  <link rel="stylesheet" href="http://localhost:8000/assets/css/main.css">

  <!-- metisMenu stylesheet -->
  <link rel="stylesheet" href="http://localhost:8000/assets/lib/metismenu/metisMenu.css">

  <!-- onoffcanvas stylesheet -->
  <link rel="stylesheet" href="http://localhost:8000/assets/lib/onoffcanvas/onoffcanvas.css">

  <!-- animate.css stylesheet -->
  <link rel="stylesheet" href="http://localhost:8000/assets/lib/animate.css/animate.css">

  <link rel="stylesheet" href="http://localhost:8000/assets/jquery-ui/jquery-ui.css">

<!-- datatable v1 -->
  <!-- <link rel="stylesheet" href="http://localhost:8000/assets/datatable/datatables.css"> -->

  <!--For Development Only. Not required -->

  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  {{--  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>  --}}
  <script src="http://localhost:8000/assets/js/usuarios.js"></script>
  <script src="http://localhost:8000/assets/jquery-ui/jquery-ui.js"></script>
  {{--  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  --}}
  


  <script>
    
    less = {
      env: "development",
      relativeUrls: false,
      rootpath: "/http://localhost:8000/assets/"
    };

    

  </script>
  <link rel="stylesheet" href="http://localhost:8000/assets/css/style-switcher.css">
  <!-- <link rel="stylesheet/less" type="text/css" href="http://localhost:8000/assets/less/theme.less"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>



  <!-- DATATABLE V2 -->
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
<link rel='stylesheet prefetch' href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css'>
<link rel='stylesheet prefetch' href='https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css'>
<link rel="stylesheet" href="http://localhost:8000/assets/datatable2/css/style.css">
</head>

<body class="  ">
  <div class="bg-dark dk" id="wrap">
    <div id="top">
      <!-- .navbar -->
      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">


          <!-- Brand and toggle get grouped for better mobile display -->
          <header class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">
              <img src="http://localhost:8000/assets/img/logo.png" alt="">
            </a>

          </header>

          <div class="topnav">
            <div class="btn-group">
              <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                <i class="glyphicon glyphicon-fullscreen"></i>
              </a>
            </div>
          </div>

          <div class="collapse navbar-collapse navbar-ex1-collapse">

            <!-- .nav -->
            <ul class="nav navbar-nav">
              <!-- <li>
                <a href="/comunidad">Comunidad</a>
              </li> -->

              <li class='dropdown '>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Comunidad
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="/comunidad">Datos Comunidad</a>
                  </li>
                  <li>
                    <a href="/agua">Gestión Precio Agua</a>
                  </li>
                  
                </ul>
              </li>


              <li>
                <a href="/usuario">Usuarios</a>
              </li>

              <li>
                <a href="/parcela">Parcelas Catastrales</a>
              </li>

              <li class='dropdown '>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Consumo de agua
                    <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/peticion">Peticiones superficie (Generar Petición)</a>
                      
                  </li>                  
                    
                  </ul>
                </li>


            </ul>
            <!-- /.nav -->
          </div>
        </div>
        <!-- /.container-fluid -->
      </nav>
      <!-- /.navbar -->
      <header class="head">
        
        <div class="main-bar">
          <p>
          @yield('title')
</p>
        </div>
        <!-- /.main-bar -->
      </header>
      <!-- /.head -->
    </div>
    <!-- /#top -->

    <!-- /#left -->
    <div id="content">
      <div class="outer">
        <div class="inner bg-light lter">
          <div class="col-lg-12">
            
            @yield('content')

          </div>

        </div>
        <!-- /.inner -->
      </div>
      <!-- /.outer -->
    </div>
    <!-- /#content -->

  
    <!-- /#right -->
  </div>
  <!-- /#wrap -->
  <!-- <footer class="Footer bg-dark dker">
    <p>2017 &copy; Metis Bootstrap Admin Template v2.4.2</p>
  </footer> -->
  <!-- /#footer -->

  <!--jQuery -->
  {{--  <script src="http://localhost:8000/assets/lib/jquery/jquery.js"></script>  --}}


  <!--Bootstrap -->
  <script src="http://localhost:8000/assets/lib/bootstrap/js/bootstrap.js"></script>
  <!-- MetisMenu -->
  <script src="http://localhost:8000/assets/lib/metismenu/metisMenu.js"></script>
  <!-- onoffcanvas -->
  <script src="http://localhost:8000/assets/lib/onoffcanvas/onoffcanvas.js"></script>
  <!-- Screenfull -->
  <script src="http://localhost:8000/assets/lib/screenfull/screenfull.js"></script>


  <!-- Metis core scripts -->
  <script src="http://localhost:8000/assets/js/core.js"></script>
  <!-- Metis demo scripts -->
  <script src="http://localhost:8000/assets/js/app.js"></script>

  <!-- datatable v2 -->
  <!-- <script src="http://localhost:8000/assets/datatable/table.js"></script>
    <script src="http://localhost:8000/assets/datatable/datatables.js"></script>
     -->


<!-- DATATABLE V2 -->


<script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js'></script>
<script src='https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js'></script>

<script  src="http://localhost:8000/assets/datatable2/js/index.js"></script>

<script>
    $( function() {
      $( ".datepicker" ).datepicker();
    } );
</script>

</body>

</html>