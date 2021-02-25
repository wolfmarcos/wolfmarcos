



<?php

    include("includes/ciente_poliza_conecion.php");

    // Recibo los valores
    $p_dni_titular = filter_var($_POST['dni_titular'], FILTER_SANITIZE_STRING);
   
    $p_poliza = filter_var($_POST['Nro.poliza'], FILTER_SANITIZE_STRING);
     
     $p_carga_Pdf = filter_var($_POST['carga_Pdf'], FILTER_SANITIZE_STRING);
       
     $p_vigencia = filter_var($_POST['vigencia'], FILTER_SANITIZE_STRING);
   
    $p_tipo_veiculo = filter_var($_POST['tipo_veiculo'], FILTER_SANITIZE_STRING);

    $p_marca = filter_var($_POST['marca'], FILTER_SANITIZE_EMAIL);

    $p_modelo = filter_var($_POST['modelo'], FILTER_SANITIZE_EMAIL);

    $p_tipo_de_uso = filter_var($_POST['tipo_de_uso'], FILTER_SANITIZE_EMAIL);

    $p_Patente = filter_var($_POST['Patente'], FILTER_SANITIZE_EMAIL);
    $p_Chasis = filter_var($_POST['Nro.Chasis'], FILTER_SANITIZE_EMAIL);
    $p_motor = filter_var($_POST['Nro.motor'], FILTER_SANITIZE_EMAIL);
    $p_suma_asegurada = filter_var($_POST['suma_asegurada'], FILTER_SANITIZE_EMAIL);
    $p_TipoSeguro = filter_var($_POST['TipoSeguro'], FILTER_SANITIZE_EMAIL);
    $p_covertura = filter_var($_POST['covertura'], FILTER_SANITIZE_EMAIL);
    $p_localidad_automotor = filter_var($_POST['localidad_automotor'], FILTER_SANITIZE_EMAIL);



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
        $alta = "insert into titular (dni_titular,Nro.poliza,carga_Pdf,vigencia,tipo_veiculo,marca,modelo,tipo_de_uso,Patente,Nro.Chasis,Nro.motor ,suma_asegurada ,TipoSeguro,covertura,localidad_automotor  )
        values ('$p_dni_titular','$p_poliza','$p_carga_Pdf','$p_vigencia','$p_tipo_veiculo','$p_marca','$p_modelo','$p_tipo_de_uso','$p_Patente','$p_Chasis','$p_motor','$p_suma_asegurada',
        '$p_TipoSeguro','$p_covertura','$p_localidad_automotor');";
        $resultado_alta = mysqli_query($conexion,$alta);

        header("location:formAutomotor.php");
                        
            
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