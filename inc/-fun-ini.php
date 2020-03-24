<?php
//require_once("../cnx/fnt-web.php");
function servicios()
{
    $servicios = array();
    
    $servicios[] = array('<i class="fas fa-birthday-cake"></i>','Cumpleaños ');
    $servicios[] = array('<i class="fas fa-birthday-cake"></i>','Fiestas Tema');
    $servicios[] = array('<i class="fas fa-baby-carriage"></i>','Baby Shower');
    $servicios[] = array('<i class="fas fa-hat-wizard"></i>','Noche de Brujas');
    $servicios[] = array('<i class="fas fa-graduation-cap"></i>','Graduaciones Escolares');
    $servicios[] = array('<i class="fas fa-child"></i>','Día del Niño y de la Niña');
    $servicios[] = array('<i class="fas fa-hiking"></i>','Acantonamientos y Campamentos Organizados');
    $servicios[] = array('<i class="fas fa-briefcase"></i>','Animación y Recreación en Eventos Escolares y Empresariales');

    for($i=0;$i<sizeof($servicios);$i++)
    { ?>
       <div class="col-md-3 col-lg-3 mb-4 mb-lg-3">
         <div class="service h-100">
           <h3><?=$servicios[$i][0];?> <?=$servicios[$i][1];?></h3>
         </div>
       </div> 
    <? }
}

function slider()
{
    $select = "SELECT * FROM CatImagenes ORDER BY RAND() LIMIT 0,3";
    $rsImagenes = mysql_query($select);
    while($rImagen = mysql_fetch_array($rsImagenes))
    { ?>
       <div class="slide">
            <img src="<?=$rImagen{'tArchivo'};?>" alt="Diversiones FANTHY">  
          </div> 
    <? }
}

function imgPaquete($codigo)
{
    $select = "SELECT * FROM CatImagenes WHERE tCodPaquete = '$codigo' ORDER BY RAND() LIMIT 0,1";
    $rsImagen = mysql_query($select);
    $rImagen = mysql_fetch_array($rsImagen);
    
    print $rImagen{'tArchivo'};
}

function galeria()
{
    $select = "SELECT * FROM CatImagenes ORDER BY RAND() LIMIT 0,16";
    $rsImagenes = mysql_query($select);
    while($rImagen = mysql_fetch_array($rsImagenes))
    { ?>
      <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?=$rImagen{'tArchivo'};?>" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?=$rImagen{'tArchivo'};?>">
            </a>
          </div>
    <? }
}

function cargarcontenido($codigo)
{
    $select = "SELECT * FROM CatPaquetes WHERE tSlug = '$codigo'";
    $rsPaquete = mysql_query($select);
    
    return mysql_fetch_array($rsPaquete);
}

function galeriapaquete($codigo)
{
    $i=0;
    $select = "SELECT * FROM CatImagenes WHERE tCodPaquete = '$codigo'";
    $rsImagenes = mysql_query($select);
    while($rImagen = mysql_fetch_array($rsImagenes))
    { ?>
    <div class="col-md-4 gal-img">
        <a href="#" data-toggle="modal" data-target="#gal<?=$i;?>"><img src="<?=$rImagen{'tArchivo'};?>" alt="Diversiones FANTHY" class="img-fluid"></a>
    </div>
    <? $i++; ?>
    <? }
}

function galeriapaqueteoverlay($codigo)
{
    $i=0;
    $select = "SELECT * FROM CatImagenes WHERE tCodPaquete = '$codigo'";
    $rsImagenes = mysql_query($select);
    while($rImagen = mysql_fetch_array($rsImagenes))
    { ?>
    <div id="gal<?=$i;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="<?=$rImagen{'tArchivo'};?>" alt="Diversiones FANTHY" class="img-responsive" />
      </div>
    </div>

  </div>
</div>
     
     <? $i++; ?>
    <? }
}

function paquetes($codigo)
{
    $select = "SELECT tSlug, tNombre FROM CatPaquetes WHERE tSlug <> '$codigo'";
    $rsPaquetes = mysql_query($select);
    while($rPaquete = mysql_fetch_array($rsPaquetes))
    { ?>
    <li>
        <a href="/paquete/<?=$rPaquete{'tSlug'};?>/" class="nav-link">
            <?=utf8_encode($rPaquete{'tNombre'});?>
        </a>
    </li>
    <? }
}

?>