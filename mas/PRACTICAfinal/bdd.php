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
       include("buscador_sql.php");
    
    
    /*
    
  buscar= <input type='text' id='buscar' required name='buscar' >
                 <?php echo "<a href='editar_automotor.php?"buscar" ' target='blank'>Editar</a> "; ?>



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
                       <button type="button" class="btn btn-danger btn-block">
                    
                    <a href="bdd_titular.php" target="blank" style="color:white;">Cantidad clientes: </a>

                     <span class="badge badge-light">
                        <?php echo $cantidad_de_u; ?>
                    </span>
               
                
            </button> 


            
            </div>

            <div class='col-3'>
               <button type="button" class="btn btn-primary btn-block">
                    Cantidad de clientes con autos registrados: <span class="badge badge-light">
                        <?php echo $cantidad_de_automotor; ?>
                    </span>
                </button>
            </div>

            <div class='col-3'>
                <button type="button" class="btn btn-danger btn-block">
                    Cantidad de clientes en demora: <span class="badge badge-light">
                        <?php echo $cantidad_de_automotor; ?>
                    </span>
               
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

                <div class="form-group">
                 



                    <form action="#" method="post">
                        <div class="form-group">
                          
                            <input type="text" id="buscar" name="buscar" class="form-control" placeholder="Ingrese  dni titular">
                        </div>
                        
                        <button class="btn btn-primary btn-block" type="submit">buscar</button>                      
                    </form>
                    



                        </div>
                <table class="table table-bordered table-sm table-hover">
                    <thead>
                        <tr style="background:#003325;color:white" class="text-center">
                            <td>
dni_titular</td><td>N_poliza</td><td>carga_Pdf</td><td>vigencia</td><td>tipo_veiculo</td><td>marca</td><td>  modelo</td><td> tipo_de_uso</td><td> Patente</td><td> N_Chasis</td><td>n_motor</td><td>suma_asegurada</td><td> TipoSeguro</td><td> covertura</td><td>localidad_automotor</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                            
                            while($qy4 = mysqli_fetch_array($resultadob)){
                                echo "<tr>";
                                    echo '<td>'.$qy4['dni_titular'].'</td>';
                                    echo "<td>".$qy4['N_poliza']."</td>";
                                     echo "<td>".$qy4['carga_Pdf']."</td>";
                                    echo "<td>".$qy4['vigencia']."</td>";
                                    echo "<td> <a href='editar_automotor.php?dni_titular=".$qy4['dni_titular']."
                                            &N_poliza=".$qy4['N_poliza']."
                                            &vigencia=".$qy4['vigencia']."
                                            ' target='blank'>Editar</a>
                                            |
                                            <a href='baja_automotor.php?dni_titular=".$qy4['dni_titular']."
                                            &N_poliza=".$qy4['N_poliza']."
                                            &vigencia=".$qy4['vigencia']."
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
