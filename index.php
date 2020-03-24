<? require_once("./cnx/fnt-web.php"); ?>
<? include("./inc/fun-ini.php"); ?>
<?
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
?>
<?php
function generarTitulo($cadena)
{
    $cadena = str_replace("-"," ",$cadena);
    $cadena = ucwords($cadena);
    print $cadena;
}
if(!$_GET['tCodSeccion']){ header("Location: /web/inicio/"); }

if($_GET['tSlug'])
{ $cnt = cargarcontenido($_GET['tSlug']); }

?>
<!doctype html>
<html lang="es">

  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Diversiones Fanthy *<?php generarTitulo($_GET['tCodSeccion']);?>*</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">
    

    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/css/<?=(($_GET['tSlug']) ? $_GET['tSlug'] : 'style');?>.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <script src="//use.edgefonts.net/playball.js"></script>
    <script src="//use.edgefonts.net/bentham.js"></script>

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container mb-3">
          <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
              <a href="/webweb/inicioinicio/"><img src="/images/png/logo-big/" style="max-height:125px;"></a>
            </div>
            
          </div>
        </div>


        <div class="container">
          <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black">Men&uacute; </span></a></span>

              

              <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto ">
                  <li <?=(($_GET['tCodSeccion']=="inicio") ? ' class="active"' : '');?>><a href="/web/inicio/" class="nav-link">Inicio</a></li>
                  <li class="nav-item dropdown  <?=(($_GET['tCodSeccion']=="paquetes") ? 'active' : '');?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Paquetes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/paquetes/animacion-infantil/">Animaci&oacute;n Infantil</a>
                      <a class="dropdown-item" href="/paquetes/animacion-recreativa/">Animaci&oacute;n Recreativa</a>
                      <a class="dropdown-item" href="/paquetes/recreativo-master/">Recreativo Master</a>
                      <a class="dropdown-item" href="/paquetes/aqua-fiesta/">Aqua Fiesta</a>
                      <a class="dropdown-item" href="/paquetes/baby-shower/">Baby Shower</a>
                    </div>
                  </li>
                  <li <?=(($_GET['tCodSeccion']=="galeria") ? ' class="active"' : '');?>><a href="/web/galeria/" class="nav-link">Galer&iacute;a</a></li>
                  <li <?=(($_GET['tCodSeccion']=="contacto") ? ' class="active"' : '');?>><a href="/web/contacto/" class="nav-link">Contacto</a></li>
                </ul>
              </nav>

              <div class="top-social ml-auto">
                <? redessociales(); ?>
              </div>
          </div>
        </div>

       

      </header>
      
    

    <div class="ftco-blocks-cover-1">
       
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('<?=($cnt['tCodPaquete'] ? imgPaquete($cnt['tCodPaquete']) : imgHeader());?>')">
        <div class="container">
          <div class="row align-items-center ">
            <div class="col-md-8 mt-5 pt-5">
              <span class="text-cursive h5 text-red"></span>
              <h1 class="mb-3 font-weight-bold text-teal">DIVERSIONES "FANTHY"</h1>
              <h5 style="color:#FFF">10 a&ntilde;os creando en cada uno de nuestros eventos:</h5>
               <h3 style="color:#FFF; font-weight:bold;"><i>"Una Experiencia para Compartir"</i></h3>
            </div>
            
          </div>
        </div>
      </div>
    </div>

      <!--Contenido-->
      
      <?php
        $seccion = 'cnt/'.$_GET['tCodSeccion'].'.php';
        //if(file_exists($seccion))
            include($seccion);
        ?>
    
    <!--Contenido-->
    

    <footer class="site-footer">
      <div class="container">
        
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            
            &copy;<script>document.write(new Date().getFullYear());</script> Todos los Derechos Reservados
            
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-migrate-3.0.0.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/aos.js"></script>

    <script src="/js/main.js"></script>

  </body>

</html>

