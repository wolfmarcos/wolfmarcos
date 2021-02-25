<?php

include("includes/ciente_poliza_conecion.php");


//variable



        // Paso 4) Escribimos las consultas SQL// Paso 5) Ejecutamos las consultas.
    
        
           $consulta1 = 'select count(distinct dni_titular) as cliente from titular';
        $resultado_query1 = mysqli_query($conexion,$consulta1)
        or die('Hubo un error en la Query1');
          while($fila1 = mysqli_fetch_assoc($resultado_query1)){
            $cantidad_de_u = $fila1['cliente'];
        }


             $consulta2 = 'select count(distinct dni_titular) as poliza    from poliza_automotor  ';
        $resultado_query2 = mysqli_query($conexion,$consulta2)
        or die('Hubo un error en la Query2');
          while($fila1 = mysqli_fetch_assoc($resultado_query2)){
            $cantidad_de_automotor = $fila1['poliza'];
        }



        $consulta4 = 'select distinct * from poliza_automotor';
        $resultado_query4 = mysqli_query($conexion,$consulta4)
        or die('Error en la Query 4');

      
       




if(!isset($_POST['buscar'])){
   $_POST['buscar'] =" ";
   $p_buscar = $_POST['buscar'];
};

$p_buscar = filter_var($_POST['buscar'], FILTER_SANITIZE_EMAIL);
// Estructura de decision 

    $sql = "select * from poliza_automotor where dni_titular like '%$p_buscar%' ";
    $resultadob = mysqli_query($conexion,$sql);
  

// Paso 6) Cerramos la conexion   
 mysqli_close($conexion);
 /*  

header("Location: bdd.php?mensaje2='$resultado22'");



  while($a = mysqli_fetch_assoc($resultado22)){
        $existe = $a['nuevo'];
    }

    echo "<script languaje='javascript' type='text/javascript'>
    window.opener.document.location.reload();self.close()
    </script>";

    echo "<script languaje='javascript' type='text/javascript'>
        window.close();
    </script>"; */




?>