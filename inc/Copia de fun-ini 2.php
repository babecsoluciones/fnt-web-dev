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
       <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 teal">
              
                <?=$servicios[$i][0];?>
            
              <div class="post-entry-1-contents">
                
                <h2><?=$servicios[$i][1];?></h2>
                
              </div>
            </div>
          </div>
    <? }
}

function addons()
{
    $addon = array();
    $addon[] = 'Excursiones.';
    $addon[] = 'Visitas Guiadas.';
    $addon[] = 'Cursos de Verano.';
    $addon[] = 'Acantonamientos y Campamentos Recreativos.';
    $addon[] = 'Animaciones Familiares, Escolares y Empresariales.';
    $b=0;
    for($i=0;$i<sizeof($addon);$i++)
    {?>
    <div class="col-lg-4">
      <div class="package text-center bg-white">
        <span class="img-wrap"></span>
        <h3 class="text-teal"><?=$addon[$i];?></h3>
      </div>
    </div>
    <? $b++; ?>
    <? if($b==3){ $b=0; ?><div class="clearfix"></div><div class="col-lg-12" style="heigght:25px;"></div><? } ?>
    <?}
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

function imgHeader()
{
    $select = "SELECT * FROM CatImagenes ORDER BY RAND() LIMIT 0,1";
    $rsImagenes = mysql_query($select);
    $rImagen = mysql_fetch_array($rsImagenes);
    print $rImagen{'tArchivo'};
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
    <div class="col-md-3 mb-4">
            <a href="<?=$rImagen{'tArchivo'};?>" data-fancybox="gal"><img src="<?=$rImagen{'tArchivo'};?>" alt="Image" class="img-fluid"></a>
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