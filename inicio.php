<?php
include("bd.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta content="text/html; charset=UTF-8" http-equiv="content-type" /><title>Buscando a Pancracio el Zorro</title>
<link rel="stylesheet" type="text/css" href="pancracio.css" /></head><body>
<div id="contenedor">
<h1>¿Dónde está Pancracio el zorro?</h1>
<div id="cancha"><div id="juego"><!--Terminan los div "cancha" y "juego" -->
</div></div>
<?php
function genere($viaje) {
	$prov=round(rand(1,24));	
	$num=count($viaje);
	for($j=0;$j<$num;$j++) {if($viaje[$j]==$prov) {$band=1;}}
	if ($band) {$prov=genere($viaje);}
	return $prov;
}

extract($_POST);
$viaje[0]=round(rand(1,24));
for($i=1;$i<8;$i++) {$viaje[$i]=genere($viaje);	}
//imprima($viaje);
conectar(); 
//$resp=mysql_query("SELECT codigo, provincia from provincias");
// while($fila=mysql_fetch_array($resp)) {
//	echo "<option value=\"" . $fila['codigo']. "\">" . $fila['provincia']. "</option>";
// }
$sql="SELECT codigo, provincia from provincias where codigo=" . $viaje[0];
$resp=mysql_query($sql);
if($fila=mysql_fetch_array($resp)) {
	}
?>
<div id="habla">
<p>¡Hola, <?php echo $nombre;?>! Estamos muy preocupados porque hemos perdido a Pancracio, el zorro. Nos dijeron que lo vieron en la <?php echo $fila['provincia']; ?> ¡Sólo vos podés ayudarnos a encontrarlo!</p>
</div>
<div id="animal" style="margin-left:60px;">
<h3>Guardaparque</h3><img src="animales/g.png" alt="Guardaparque" title="Guardaparque" /></div>
<div id="viajar" style="text-align:center;">
<form method="post" action="juego.php">
<input type="hidden" name="personaje" value="<?php echo $personaje; ?>" />
<input type="hidden" name="viaje" value="<?php echo serialize($viaje); ?>" />
<input type="hidden" name="paso" value="0" />
<input type="hidden" name="errores" value="0" />
<input type="hidden" name="nombre" value="<?php echo $nombre; ?>" />
<input type="hidden" name="origen" value="0" />

<select name="destino">
<?php echo "<option value=\"" . $fila['codigo']. "\">" . $fila['provincia']. "</option>"; ?>
</select>
<input type="submit" value="Viajar" />
</form>
</div>
</div>
</body></html>
