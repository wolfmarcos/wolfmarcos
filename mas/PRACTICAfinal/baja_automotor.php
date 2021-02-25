<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

     <!-- Archivos a incluir -->
    <?php   
        $usuario = $_GET['dni_titular'];
        $clave = $_GET['N_poliza'];
        $rol = $_GET['vigencia'];

    ?>

    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Baja registro.</h5>
    </div>     

</head>
<body class="container">
 
    <!-- FORMULARIO -->
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            
                <form action="baja_automotor_sql.php" method="post">
                    <div class="form-group">
                        <label for="usuario" style="color:green;" class="font-weight-bold">Usuario</label>
                        <input type="text" id="usuario" name="usuario" readonly value="<?php echo $usuario; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="clave" style="color:green;" class="font-weight-bold">Clave</label>
                        <input type="text" id="clave" name="clave" readonly value="<?php echo $clave; ?>" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="rol" style="color:green;" class="font-weight-bold">Rol</label>
                        <input type="text" id="rol" name="rol" readonly value="<?php echo $rol; ?>" class="form-control">
                    </div>     
                    <button type="submit" class="btn btn-danger btn-block" name="boton" value=1>Eliminar el registro</button>  
                    <button type="submit" class="btn btn-primary btn-block" name="boton" value=0>Anular la baja</button>          
                </form>            
            
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>


