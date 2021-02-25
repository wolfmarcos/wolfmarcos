<?php

    include("includes/empleados_conecion.php");

    // Recibo los valores
    $p_usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
    $p_clave = filter_var($_POST['clave'], FILTER_SANITIZE_STRING);
    $p_nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $p_apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    $p_correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
 
    $clave2 = password_hash($p_clave,PASSWORD_DEFAULT);
      session_start();
$_SESSION['clave22'] = $clave2;
    // Verificamos si el usuario existe en la BDD
    $consulta1 = "select count(usuario) as nuevo from empleadoseg where usuario = '$p_usuario' or dni = '$p_dni'";

    $resultado1 = mysqli_query($conexion,$consulta1);

    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // Estructura de decision
    if($existe==1){
        header("Location: registro.php?mensaje=uno");
    }else{
        $alta = "insert into empleadoSeg (usuario,nombre,apellido,genero,clave)
        values ('$p_usuario','$p_nombre','$p_apellido','f','$clave2');";
        $resultado_alta = mysqli_query($conexion,$alta);

        header("location:index.php");
                        
            
    }

?>