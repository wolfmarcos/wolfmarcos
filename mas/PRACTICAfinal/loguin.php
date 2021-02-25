<?php

    session_start();
     include("includes/empleados_conecion.php");

    // 1. Recibo los valores
    $usuario = filter_var($_POST['user'],FILTER_SANITIZE_STRING);
    $clave = filter_var($_POST['pass'],FILTER_SANITIZE_STRING);

    // 2. Verifico si el usuario existe.
    $consulta1 = "select count(usuario) as nuevo from empleadoseg where usuario = '$usuario' ";

    $resultado1 = mysqli_query($conexion,$consulta1);

    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // 3. Estructura 
    if($existe==0){
        // No existe en la base de datos.
        header("location:index.php?mensaje=dos");
    }else {
        // Existe el usuario, recupero la clave de la BDD
        $consulta_clave_bdd = "SELECT clave FROM empleadoseg WHERE usuario='$usuario'";
        

        $resultado_clave_bdd = mysqli_query($conexion,$consulta_clave_bdd);

        while($a = mysqli_fetch_assoc($resultado_clave_bdd)){
            $clave_bdd = $a['clave'];
        }
         
    }
echo $_SESSION['clave22'];
    // 4. Verificamos la clave
    if(password_verify($clave, $clave_bdd)){
        //Clave correcta - Recupero los datos
       $consulta_datos = "select usuario,nombre,apellido from empleadoseg where usuario = '$usuario' ";
       $resultado_consulta_datos = mysqli_query($conexion,$consulta_datos);
        
       
       while($b = mysqli_fetch_array){
           $_SESSION['usuario'] = $b['usuario'];
           $_SESSION['nombre'] = $b['nombre'];
           $_SESSION['apellido'] = $b['apellido'];
           $_SESSION['autorizado']='si';
           header("location:index.php");
       }


    }else echo '<br> Error en la clav e<br>', $clave_bdd;

?>