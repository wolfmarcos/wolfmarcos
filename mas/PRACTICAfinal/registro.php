<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

     <!-- Archivos a incluir -->
    <?php   
    $mensaje = "Ingrese los datos";
    if(isset($_GET['mensaje'])){
        if($_GET['mensaje']=='uno'){$mensaje = 'El dato ya existe en la base de datos.';}
    } 


    ?>

    <!-- Titulo de la pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Alta de nuevo registro.</h5>
    </div>     

</head>
<body class="container">
 
    <!-- FORMULARIO -->
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            
                <form action="registro_sql.php" method="post">
                    <div class="form-group">
                        <label for="usuario" style="color:green;" class="font-weight-bold">Ingrese el usuario</label>
                        <input type="text" id="usuario" name="usuario" required placeholder="Ingrese un usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="clave" style="color:green;" class="font-weight-bold">Ingrese la nueva clave</label>
                        <input type="password" id="clave" name="clave" required placeholder="Ingrese una clave" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="nombre" style="color:green;" class="font-weight-bold">Ingrese su nombre</label>
                        <input type="text" id="nombre" name="nombre" required placeholder="Ingrese su nombre" class="form-control">
                    </div>     
                    <div class="form-group">
                        <label for="apellido" style="color:green;" class="font-weight-bold">Ingrese su apellido</label>
                        <input type="text" id="apellido" name="apellido" required placeholder="Ingrese su apellido" class="form-control">
                    </div>   
                    <div class="form-group">
                        <label for="correo" style="color:green;" class="font-weight-bold">Ingrese su correo</label>
                        <input type="email" id="correo" name="correo" required placeholder="Ingrese su correo" class="form-control">
                    </div>                                      
                    <button type="submit" class="btn btn-primary btn-block">Cargar el registro este e jorge</button>  
                    <?php echo $mensaje;   ?>                                 
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


