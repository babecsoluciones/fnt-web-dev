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
                <h2>Costo:</h2>
                <center>
              <span class="price">
                <span>$<?=$dPrecio;?></span>
              </span>
              </center>
              <h4><?=$tPrecio;?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    
     <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red d-block">Algunas fotos</span>
            <h2 class="text-black"></h2>
          </div>
        </div>
        <div class="row">
         <?=galeriapaquete($tCodPaquete);?>
        </div>
      </div>
    </div>