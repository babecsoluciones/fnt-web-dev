<? include("fnt-web.php"); ?>
<? if($_POST){ ?>
<?
    foreach($_POST['tCodPaquete'] as $key => $tCodPaquete){
        $tCodPaquete    = "'".$tCodPaquete."'";
        $tNombre        = "'".utf8_encode($_POST['tNombre'.$key])."'";
        $tEncabezado    = "'".base64_encode($_POST['tEncabezado'.$key])."'";
        $tContenido     = "'".base64_encode($_POST['tContenido'.$key])."'";
        $tPrecio        = "'".base64_encode($_POST['tPrecio'.$key])."'";
        $dPrecio        = $_POST['dPrecio'.$key];
        
        $update = "UPDATE CatPaquetes SET
        tNombre = $tNombre,
        tEncabezado = $tEncabezado,
        tContenido = $tContenido,
        tPrecio = $tPrecio,
        dPrecio = $dPrecio
        WHERE tCodPaquete = $tCodPaquete";
        
        $rs = mysql_query($update);
        if($rs)
        {
            print 'El paquete '.$tCodPaquete.' fue actualizado correctamente<br>';
        }
        else
        {
            print '<b>El paquete '.$tCodPaquete.' tuvo un error de actualizacion</b><br>';
        }
    }
?>
<? } else { ?>
<form action="paquetes.php" method="post">
<table>
<? $i = 0; ?>
<? $select = "SELECT * FROM CatPaquetes"; ?>
<?$rsPaquetes = mysql_query($select); ?>
<? while($rPaquete = mysql_fetch_array($rsPaquetes)){ ?>
<tr>
    <td><input type="hidden" id="tCodPaquete<?=$i;?>" name="tCodPaquete[<?=$i;?>]" value="<?=$rPaquete{'tCodPaquete'};?>"><?=$rPaquete{'tCodPaquete'};?></td>
    <td><textarea name="tNombre<?=$i;?>"><?=utf8_encode($rPaquete{'tNombre'});?></textarea></td>
    <td><textarea name="tEncabezado<?=$i;?>"><?=base64_decode($rPaquete{'tEncabezado'});?></textarea></td>
    <td><textarea name="tContenido<?=$i;?>"><?=base64_decode($rPaquete{'tContenido'});?></textarea></td>
    <td><textarea name="tPrecio<?=$i;?>"><?=base64_decode($rPaquete{'tPrecio'});?></textarea></td>
    <td><textarea name="dPrecio<?=$i;?>"><?=$rPaquete{'dPrecio'};?></textarea></td>
</tr>
<? $i++; ?>
<? } ?>
<tr>
    <td colspan="6"><input type="submit" value="Guardar"></td>
</tr>
</table>
</form>
<? } ?> 