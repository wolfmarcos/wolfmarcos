<?php
    session_start();
    if(!isset($_SESSION['autorizado']) or $_SESSION['autorizado']=='no'){
        header("location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">  

    <!-- Archivos a incluir -->
    <?php 
        include("includes/menu.php"); 
        include("includes/ciente_poliza_conecion.php");


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



        $consulta4 = 'select distinct * from  titular';
        $resultado_query4 = mysqli_query($conexion,$consulta4)
        or die('Error en la Query 4');

        // Paso 6) Cerramos la conexion
        mysqli_close($conexion);
    
    
    /*
    

    $consulta1 = 'select count(distinct Patente) as nombres from Patente';

        $rol = 'ford';
        $consulta2 = "select count(distinct marca) as administradores from   marca
        where rol = '$rol' ";

        $rol = 'chebrolet';
        $consulta3 = "select count(distinct vigencia) as analistas from vigencia
        where rol = '$rol' ";


        ___________________
        

      

        $resultado_query2 = mysqli_query($conexion,$consulta2)
        or die('Error en la Query 2');

        while($fila2 = mysqli_fetch_assoc($resultado_query2)){
            $cantidad_de_administradores = $fila2['administradores'];
        }

        $resultado_query3 = mysqli_query($conexion,$consulta3)
        or die('Error en la Query 3');

        while($fila3 = mysqli_fetch_assoc($resultado_query3)){
            $cantidad_de_analistas = $fila3['analistas'];
        }*/
    ?> 

</head>
<body class="container">
    <?php menu(); ?>

    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Conexión a base de datos.</h5>
    </div>

    <!-- Primer fila -->
    <div class='container'>
        <div class='row'>
            <div class=col-3>    
                <button type="button" class="btn btn-primary btn-block">
                    Cantidad clientes: <span class="badge badge-light">
                        <?php echo $cantidad_de_u; ?>
                    </span>
                </button>
            </div>


            <div class='col-3'>
                 <button type="button" class="btn btn-danger btn-block">
                    
                    <a href="bdd.php" target="blank" style="color:white;">Cantidad de clientes con autos registrados con auto:</a>

                     <span class="badge badge-light">
                        <?php echo $cantidad_de_automotor; ?>
                    </span>

</div> 
            <div class='col-3'>
                <button type="button" class="btn btn-danger btn-block">
                    
                    <a href="bdd.php" target="blank" style="color:white;">Cantidad de clientes en demora</a>

                     <span class="badge badge-light">
                        <?php echo $cantidad_de_automotor; ?>
                    </span>
               
                
            </button> 
            </div> 
            <div class='col-3'>
                <button type="button" class="btn btn-danger btn-block">
                    <a href="formAutomotor.php" target="blank" style="color:white;">Nuevo registrooo</a>
                </button>
            </div>                         
        </div>    
    </div>

    <!-- Segunda fila / TABLA -->
    <br>
    <div class='container'>
        <div class='row'>

            <div class='table-responsive'>
                <table class="table table-bordered table-sm table-hover">
                    <thead>
                        <tr style="background:#003325;color:white" class="text-center">
                            <td>
dni_titular</td><td>nombre</td><td>apellido</td><td>domicilio</td><td>tipo_veiculo</td><td>marca</td><td>  modelo</td><td> tipo_de_uso</td><td> Patente</td><td> N_Chasis</td><td>n_motor</td><td>suma_asegurada</td><td> TipoSeguro</td><td> covertura</td><td>localidad_automotor</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                            
                            while($qy4 = mysqli_fetch_array($resultado_query4)){
                                echo "<tr>";
                                    echo '<td>'.$qy4['dni_titular'].'</td>';
                                    echo "<td>".$qy4['nombre']."</td>";
                                     echo "<td>".$qy4['apellido']."</td>";
                                    echo "<td>".$qy4['domicilio']."</td>";
                                    echo "<td>
                                            <a href='editar_automotor.php?dni_titular=".$qy4['dni_titular']."
                                            &nombre=".$qy4['nombre']."
                                            &domicilio=".$qy4['domicilio']."
                                            ' target='blank'>Editar</a>
                                            |
                                            <a href='baja_automotor.php?dni_titular=".$qy4['dni_titular']."
                                            &nombre=".$qy4['nombre']."
                                            &domicilio=".$qy4['domicilio']."
                                            ' target='blank'>Eliminar</a>
                                         </td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        
        </div>
    </div>    

 
    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
