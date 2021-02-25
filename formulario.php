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
    <title>Formulario</title>

     <!-- Archivos a incluir -->
    <?php   
    $mensaje = "Ingrese los datos";
    if(isset($_GET['mensaje'])){
        if($_GET['mensaje']=='uno'){$mensaje = 'El dato ya existe en la base de datos.';}
    } 


    ?>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

     <!-- Archivos a incluir -->
     <?php  include('includes/menu.php');?>

</head>
<body class="container">

    <?php menu(); ?>
  
    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Envio de datos al servidor.-> <?php echo $mensaje;   ?> </h5>
    </div>
    
    <!--Formulario -->
    <div class="row">
        <div class="col-2"></div>

        <div class="col-8">
            <form method="post" action="formulario_recepcion.php">
                <hr size="2px" color="black" />
                <div class="form-group">
                    <label for="usuario">Nombre del usuario.</label>
                    <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario" class="form-control">
                </div>

    <div class="form-group">
                    <label for="nombre">Nombre </label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" class="form-control">
                </div>

                    <div class="form-group">
                    <label  for="apellido">APELLIDO.</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" class="form-control">
                


                  <div class="form-group">
                        <label for="correo" style="color:green;" class="font-weight-bold">Ingrese su correo</label>
                        <input type="email" id="correo" name="correo" required placeholder="Ingrese su correo" class="form-control">
                    </div>      


                <div class="form-group">
                    <label for="clave">Clave del usuario.</label>
                    <input type="password" id="clave" name="clave" placeholder="Ingrese su clave" class="form-control">
                </div>


                    <div class="form-group">
                    <label for="domicilio">Domicilio.</label>
                    <input type="text" id="domicilio" name="domicilio" placeholder="Ingrese la domicilio" class="form-control">
                </div>



                <div class="form-group">
                    <label for="telefono">telefono.</label>
                    <input type="text" id="telefono" name="telefono" placeholder="Ingrese el telefono" class="form-control">
                </div> 

                 <div class="form-group">
                    <label for="registro">registro.</label>
                    <input type="text" id="registro" name="registro" placeholder="Ingrese Ner. registro" class="form-control">
                </div> 

                <div class="form-group">
                    <label for="localidad">localidad.</label>
                    <input type="text" id="localidad" name="localidad" placeholder="Ingrese  localidad" class="form-control">
                </div> 

                     <div class="form-group">
                    <label for="localidad">dni.</label>
                    <input type="text" id="dni" name="dni" placeholder="Ingrese  dni de titular" class="form-control">
                </div> 


                           

                <button type="submit" class="btn btn-primary btn-block">Enviar</button>  
                <br><br>                             
            </form>
        </div>
        
        <div class="col-2"></div>
    </div>    

    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>





