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
                    <label for="dni_titular">Nombre del dni_titular.</label>
                    <input type="text" id="dni_titular" name="dni_titular" placeholder="Ingrese su dni_titular" class="form-control">
                </div>

    <div class="form-group">
                    <label for="Nro.poliza">Nro.poliza </label>
                    <input type="text" id="Nro.poliza" name="Nro.poliza" placeholder="Ingrese su Nro.poliza" class="form-control">
                </div>

                    <div class="form-group">
                    <label  for="carga_Pdf">carga_Pdf.</label>
                    <input type="text" id="carga_Pdf" name="carga_Pdf" placeholder="Ingrese su carga_Pdf" class="form-control">
                


                  <div class="form-group">
                        <label for="vigencia" style="color:green;" class="font-weight-bold">Ingrese su vigencia</label>
                        <input type="email" id="vigencia" name="vigencia" required placeholder="Ingrese su vigencia" class="form-control">
                    </div>      


                <div class="form-group">
                    <label for="tipo_veiculo">tipo_veiculo.</label>
                    <input type="tipo_veiculo" id="tipo_veiculo" name="tipo_veiculo" placeholder="Ingrese su tipo_veiculo" class="form-control">
                </div>


                    <div class="form-group">
                    <label for="marca">marca.</label>
                    <input type="text" id="marca" name="marca" placeholder="Ingrese la marca" class="form-control">
                </div>



                <div class="form-group">
                    <label for="modelo">modelo.</label>
                    <input type="text" id="modelo" name="modelo" placeholder="Ingrese el modelo" class="form-control">
                </div> 

                 <div class="form-group">
                    <label for="tipo_de_uso">tipo_de_uso.</label>
                    <input type="text" id="tipo_de_uso" name="tipo_de_uso" placeholder="tipo_de_uso" class="form-control">
                </div> 

                <div class="form-group">
                    <label for="localidad">localidad.</label>
                    <input type="text" id="localidad" name="localidad" placeholder="Ingrese  localidad" class="form-control">
                </div> 

                     <div class="form-group">
                    <label for="Patente">Patente.</label>
                    <input type="text" id="Patente" name="Patente" placeholder="Ingrese  Patente" class="form-control">
                </div> 

                         <div class="form-group">
                    <label for="Nro.Chasis">Nro.Chasis.</label>
                    <input type="text" id="Nro.Chasis" name="Nro.Chasis" placeholder="Ingrese  Nro.Chasis" class="form-control">
                </div> 

                         <div class="form-group">
                    <label for="Nro.motor">Nro.motor.</label>
                    <input type="text" id="Nro.motor" name="Nro.motor" placeholder="Ingrese  Nro.motor" class="form-control">
                </div> 

                         <div class="form-group">
                    <label for="suma_asegurada">suma_asegurada.</label>
                    <input type="text" id="suma_asegurada" name="suma_asegurada" placeholder="Ingrese  suma_asegurada" class="form-control">
                </div> 

                         <div class="form-group">
                    <label for="TipoSeguro">TipoSeguro.</label>
                    <input type="text" id="TipoSeguro" name="TipoSeguro" placeholder="Ingrese  TipoSeguro" class="form-control">
                </div> 

                         <div class="form-group">
                    <label for="covertura">covertura.</label>
                    <input type="text" id="covertura" name="covertura" placeholder="Ingrese  covertura" class="form-control">
                </div> 

                         <div class="form-group">
                    <label for="localidad_automotor">localidad_automotor.</label>
                    <input type="text" id="localidad_automotor" name="localidad_automotor" placeholder="Ingrese  localidad_automotor" class="form-control">
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





