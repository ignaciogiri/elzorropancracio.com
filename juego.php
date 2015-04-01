<?php
include("bd.php");
extract($_POST);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type" /><title>Buscando a Pancracio el Zorro</title>
<link rel="stylesheet" type="text/css" href="pancracio.css" />
</head><body>
<div id="contenedor">
<?php
$prov=provincias();
$queprov=queprov($destino);
$itinerario=unserialize($viaje);

// print_r($prov);
// imprima($itinerario); 
// $num= count($itinerario);

echo "<div id=\"cancha\" style=\"background-image:url('provincias/" . $destino . ".jpg')\"><div id=\"juego\">";
echo "<h1>¿Dónde está Pancracio el zorro? - " . $queprov['p'] . "</h1>";

/*//TST
echo $personaje;
print_r($itinerario);
echo "Elementos del array: " .  $num . "<br />";
echo "<br />";
echo $paso . "<br />";
echo $errores . "<br />";
echo $nombre . "<br />";
echo $origen . "<br />";
echo $destino . "<br />";
// /TST*/

if($destino==$itinerario[$paso]) 
	if($paso<7)	{$paso++;
			$msj=pista($itinerario[$paso]);	
			$ok=1;
	}
	else {$msj="<h1>¡Me encontraste!</h1><h2>¡Ganaste!</h2> <p>Errores en total: " . $errores . ".<br /><a href=\"index.html\">Volver a jugar</a></p>"; $ok=2;}
else {
	$errores++;
	$paso--;
	$volver=queprov($itinerario[$paso]);
	$msj="Por aquí no lo hemos visto. Te vas a tener que volver a la " . $volver['p'] . ".";
	$ok=0;
}
?>
<!--Terminan los div "cancha" y "juego" -->
</div></div>
<div id="viajar" style="text-align:center;">
<form method="post" action="juego.php">
<input type="hidden" name="personaje" value="<?php echo $personaje; ?>" />
<input type="hidden" name="viaje" value="<?php echo serialize($itinerario); ?>" />
<input type="hidden" name="paso" value="<?php echo $paso; ?>" />
<input type="hidden" name="errores" value="<?php echo $errores; ?>"" />
<input type="hidden" name="nombre" value="<?php echo $nombre; ?>" />
<input type="hidden" name="origen" value="<?php echo $destino; ?>"" />
<?php
if($ok==1) {
	echo "<select name=\"destino\">";
	for($i=1;$i<25;$i++) {
			echo "<option value=\"" . $prov[$i][0] . "\">" . $prov[$i][1] . "</option>";
	}
	echo "</select>";
	echo "<input type=\"submit\" value=\"Viajar\" />";
}
else if($ok==0){	echo "<select name=\"destino\">";
			echo "<option value=\"" . $itinerario[$paso] . "\">" . $volver['p'] . "</option>";
			echo "</select><input type=\"submit\" value=\"Viajar\" />";
}
/*conectar(); 
$resp=mysql_query("SELECT codigo, provincia from provincias");
while($fila=mysql_fetch_array($resp)) {
	echo "<option value=\"" . $fila['codigo']. "\">" . $fila['provincia']. "</option>";
}*/
?>
</form>
</div>
<div id="nenes">
<img src="<?php echo $personaje; ?>.png" alt="Personaje" title="<?php echo $nombre; ?>" /> 
</div>
<div id="animal">

<?php
if($ok==2) {
	echo "<h3>Pancracio el Zorro</h3>";
	echo "<img src=\"pancracio.png\" alt=\"Pancracio el Zorro\" title=\"Pancracio el Zorro\" />";
} 
else {
	echo "<h3>" . $queprov['i'] . "</h3>";
	echo "<img src=\"animales/" . $destino . ".png\" alt=\"" . $queprov['i'] . "\" title=\"" . $queprov['i'] . "\" />";
}
?>
</div>
<div id="habla">
<p><?php echo $msj ?></p>
</div>
<div id="epigrafe">
<p style="text-align: right;"><?php echo $queprov['f']; ?>
</div>
</div>
</div>
</body>
</html>
