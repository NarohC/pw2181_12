<?php 
include 'conexiones.php';
function valida(){
	$respuesta=false;
	$usuario=$_POST["usuario"];
	$clave=mad5($_POST["clave"]);
	//Conectandonos al servidor de base de datos
	$con=conecta();
	$consulta="select * from usuario where usuario= '".$usuario."' and clave= '".$clave."' limit 1";
	$renConsulta=mysqli_query($con, $consulta);
	if(mysqli_num_roq($renConsulta) > 0){
		$respuesta=true;
	}
	$salidaJSON= array('respuesta' => $respuesta);
	print json_encode($salidaJSON);
}

$opc=$_POST["opc"];
switch ($opc) {
	case 'validaentrada':
		valida();
		break;
	
	default:
		# code...
		break;
}
?>