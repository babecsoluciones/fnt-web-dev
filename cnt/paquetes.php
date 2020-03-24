<? $cnt = cargarcontenido($_GET['tSlug']); ?>
<?
$tCodPaquete        = $cnt['tCodPaquete'];
$tNombre            = utf8_encode($cnt['tNombre']);
$tEncabezado        = base64_decode($cnt['tEncabezado']);
$tDescripcion       = base64_decode($cnt['tContenido']);
$tPrecio            = base64_decode($cnt['tPrecio']);
$dPrecio            = number_format($cnt['dPrecio'],2,'.',',');
?>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 ml-auto pl-md-5">
            <?=($tEncabezado);?>
          </div>
          <div class="col-md-6">
            <img src="<?=imgPaquete($tCodPaquete); ?>" alt="Diversiones FANTHY" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 ml-auto pl-md-5">
            <?=($tDescripcion);?>
          </div>
          <div class="col-md-6">
            <div class="pricing teal text-center">
                <h2 class="web-content"><b>Costo:</b></h2>
                <center>
              <span class="price web-content">
                <span>$<?=$dPrecio;?></span>
              </span>
              </center>
              <?=$tPrecio;?>
            </div>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h3 text-red d-block"><b>Algunas fotos</b></span>
            <h2 class="text-black"></h2>
          </div>
        </div>
        <div class="row">
         <?=galeriapaquete($tCodPaquete);?>
        </div>
      </div>
    </div>