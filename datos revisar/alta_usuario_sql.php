<?php

    include("includes/conexion.php");

    // Recibo los valores
    $p_usuario = $_POST['usuario'];
    $p_clave = $_POST['clave'];
    $p_rol = $_POST['rol'];

    // Verificamos si el usuario existe en la BDD
    $consulta1 = "select count(usuario) as nuevo from usuario where usuario = '$p_usuario' ";

    $resultado1 = mysqli_query($conexion,$consulta1);

    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // Estructura de decision
    if($existe==1){
        header("Location: alta_usuario.php?mensaje=uno");
    }else{
        $alta = "insert into usuario values ('$p_usuario','$p_clave','$p_rol')";
        $resultado_alta = mysqli_query($conexion,$alta);

       echo "<script languaje='javascript' type='text/javascript'>
            window.opener.document.location.reload();self.close()
            </script>";

        echo "<script languaje='javascript' type='text/javascript'>
            window.close();
        </script>";
                        
            
    }

?>