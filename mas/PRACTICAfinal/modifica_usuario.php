<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

     <!-- Archivos a incluir -->
    <?php   
        $usuario = $_GET['usuario'];
        $clave = $_GET['clave'];
        $rol = $_GET['rol'];

    ?>

    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Modifica registro.</h5>
    </div>     

</head>
<body class="container">
 
    <!-- FORMULARIO -->
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            
                <form action="modifica_usuario_sql.php" method="post">
                    <div class="form-group">
                        <label for="usuario" style="color:green;" class="font-weight-bold">Usuario</label>
                        <input type="text" id="usuario" name="usuario" readonly value="<?php echo $usuario; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="clave" style="color:green;" class="font-weight-bold">Clave</label>
                        <input type="text" id="clave" name="clave" value="<?php echo $clave; ?>" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="rol" style="color:green;" class="font-weight-bold">Rol</label>
                        <input type="text" id="rol" name="rol" value="<?php echo $rol; ?>" class="form-control">
                    </div>     
                    <button type="submit" class="btn btn-danger btn-block" name="boton" value=1>Modifica el registro</button>  
                    <button type="submit" class="btn btn-primary btn-block" name="boton" value=0>Anular la edicion</button>          
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


