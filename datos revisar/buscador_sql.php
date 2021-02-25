<?php

include("includes/ciente_poliza_conecion.php");

// Recibo los valores
  if(isset($_GET['mensaje'])){
                  $mensaje =($_GET['mensaje']);
                  }


// Estructura de decision 

    $consulta_dni = "select * from poliza_automotor where dni_titular = '$mensaje' ";
   

     $resultado22 = mysqli_query($conexion,$consulta_dni);
     header("Location: bdd.php.php?mensaje='$resultado22'");

 /*   while($a = mysqli_fetch_assoc($resultado22)){
        $existe = $a['nuevo'];
    }

    echo "<script languaje='javascript' type='text/javascript'>
    window.opener.document.location.reload();self.close()
    </script>";

    echo "<script languaje='javascript' type='text/javascript'>
        window.close();
    </script>"; */




?>