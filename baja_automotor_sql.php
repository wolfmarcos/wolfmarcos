<?php

include("includes/ciente_poliza_conecion.php");

// Recibo los valores
$p_usuario = $_POST['dni_titular'];
$p_clave = $_POST['N_poliza'];
$p_rol = $_POST['vigencia'];
$p_boton = $_POST['boton'];

// Estructura de decision 
if($p_boton==0){
    echo "<script languaje='javascript' type='text/javascript'>
    window.close();
    </script>";    
}else{
    $baja = "delete from usuario where usuario = '$p_usuario' ";
    $resultado_baja = mysqli_query($conexion,$baja);

    echo "<script languaje='javascript' type='text/javascript'>
    window.opener.document.location.reload();self.close()
    </script>";

    echo "<script languaje='javascript' type='text/javascript'>
        window.close();
    </script>";    

}

?>