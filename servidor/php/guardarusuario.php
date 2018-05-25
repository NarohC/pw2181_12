<?php
include 'conexiones.php';
function guardarusuario(){
    $respuesta = false;
    $usuario= GetSQLValueString($_POST["usuario"],"text");
    $nombre= GetSQLValueString($_POST["nombre"],"text");
    $clave=GetSQLValueString(md5($_POST["clave"]),"text");
    //Conectarnos al servidor de la BD.
    $con=conecta();
    // $consulta="select usuario from usuarios where usuario= '".$usuario."' limit 1";
    $consulta=sprintf("select usuario from usuarios where usuario = %s", $usuario);
    $resConsulta=mysqli_query($con,$consulta);
    $consultaGuarda="";
    if(mysqli_num_rows($resConsulta) > 0){
        $consultaGuarda= sprintf("update usuarios set nombre = %s,clave= %s where usuario= %s", $nombre,$clave,$usuario)
    }else{
        $consultaGuarda= sprintf("insert into usuarios values(deafult,%s,%s,%s)", $usuario,$nombre,$clave);

    }
    mysqli_query($con, $consultaGuarda);
    if(mysqli_affected_rows() > 0){
        $respuesta = true;

    }
    //Array asociativo
    $salidaJSON = array('respuesta' => $respuesta,
                        'nombre'    => $nombre,
                        'clave'     => $clave);
    print json_encode($salidaJSON);
}
$opc=$_POST["opc"];
switch ($opc) {
    case 'guardarUsuario':
         guardarusuario();
        break;
        
    default:
         # code...
        break;
}
?>