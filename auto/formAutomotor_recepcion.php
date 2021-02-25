



<?php

    include("includes/ciente_poliza_conecion.php");

    // Recibo los valores
    $p_usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
   
    $p_nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
     
     $p_apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
       
     $p_clave = filter_var($_POST['clave'], FILTER_SANITIZE_STRING);
   
    $p_domicilio = filter_var($_POST['domicilio'], FILTER_SANITIZE_STRING);

    $p_telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_EMAIL);

    $p_registro = filter_var($_POST['registro'], FILTER_SANITIZE_EMAIL);

    $p_localidad = filter_var($_POST['localidad'], FILTER_SANITIZE_EMAIL);

    $p_dni = filter_var($_POST['dni'], FILTER_SANITIZE_EMAIL);
    $p_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $clave2 = password_hash($p_clave,PASSWORD_DEFAULT);
      session_start();
$_SESSION['clave22'] = $clave2;
    // Verificamos si el usuario existe en la BDD
    $consulta1 = "select count(usuario) as nuevo from titular where usuario = '$p_usuario' or dni_titular = '$p_dni'";

    $resultado1 = mysqli_query($conexion,$consulta1);

    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // Estructura de decision
    if($existe==1){
        header("Location: formulario.php?mensaje=uno");
    }else{
        $alta = "insert into titular (usuario,nombre,apellido,clave,domicilio,telefono,registro,localidad,dni_titular,email)
        values ('$p_usuario','$p_nombre','$p_apellido','$p_clave','$p_domicilio','$p_telefono','$p_registro','$p_localidad','$p_dni','$p_email');";
        $resultado_alta = mysqli_query($conexion,$alta);

        header("location:index.php");
                        
            
    }
    ?>
/*

$p_g = filter_var($_POST['g'], FILTER_SANITIZE_STRING);
?>


    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $clave = $_POST['clave'];

    if(isset($_POST['materia1'])){
        $materia1 = $_POST['materia1'];
    }else $materia1 = '';

    if(isset($_POST['materia2'])){
        $materia2 = $_POST['materia2'];
    }else $materia2 = '';

    if(isset($_POST['materia3'])){
        $materia3 = $_POST['materia3'];
    } else $materia3 = '';

    $materias = $materia1.' '.$materia2.' '.$materia3;

    if(isset($_POST['nivel'])){
        $nivel = $_POST['nivel'];
    }else $nivel = 'No se especifico el nivel de ingles';

    $motivo = $_POST['selector1'];

    echo '<h3>Nombre recibido: '.$nombre.'</h3>';
    echo '<h3>Apellido recibido: '.$apellido.'</h3>';
    echo '<h3>Clave recibida: '.$clave.'</h3>';
    echo '<h3>Materias favoritas: '.$materias.'</h3>';
    echo '<h3>Nivel de ingles: '.$nivel.'</h3>';
    echo '<h3>Motivo de su contacto: '.$motivo.'</h3>';

?>