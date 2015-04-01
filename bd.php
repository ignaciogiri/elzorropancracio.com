<?php 
function conectar() {
//Conectamos al servidor:
$con = mysql_connect("SERVIDOR", "USUARIO", "CONTRASEÑA") or die("¡No se ha podido establecer la conexión con el servidor! " . mysql_error());
//Elegimos la BD:
$resp = mysql_select_db("NOMBRE_BASE_DATOS") or die("¡No se ha podido seleccionar la base de datos! " . mysql_error());
}

function imprima($viaje) {
	$num=count($viaje);
	for($i=0;$i<$num;$i++) {
		echo $viaje[$i];
		if($i<$num-1) echo ",";
	}
}

function provincias() {
	conectar();
	$sql="select * from provincias";
	$resp=mysql_query($sql);
	$i=1;
	while($fila=mysql_fetch_array($resp)) {
		$prov[$i][0]=$fila['codigo'];
		$prov[$i][1]=$fila['provincia'];
		$i++;
	}
//	print_r($prov);	
	return $prov;
}

function queprov($cod) {
	//Dado el código $cod, devuelve la el array $prov, datos de la provincia.	
	conectar();	
	$sql="select provincia, interlocutor, epigrafe_foto from provincias where codigo=" . $cod;	
	$resp=mysql_query($sql);
	while ($fila=mysql_fetch_array($resp)) {
		$prov['p']=$fila['provincia'];
		$prov['i']=$fila['interlocutor'];
		$prov['f']=$fila['epigrafe_foto'];
	}
	return $prov;
}


function pista($cod) {
	//Me devuelve la cadena que servirá de pista para ir a la próxima provincia
	$orden=1; //Cambiar cuando haya más de una pista, para hacerlo aleatorio.
	conectar();	
	$sql="select pista from pistas where codigo=" . $cod . " and orden=" . $orden;	
	$resp=mysql_query($sql);
	if ($fila=mysql_fetch_array($resp)) {
		$msj=$fila['pista'];
		}
	return $msj;
}
