



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

    // Verificamos si el usuario existe en la BDD
    $consulta1 = "select count(patente) as nuevo from   poliza_automotor where Patente = '$p_Patente' ";

    $resultado1 = mysqli_query($conexion,$consulta1);
//verificar si existe dni
    $consulta2 = "select count(dni_titular) as nuevo2 from   poliza_automotor where dni_titular = '$p_dni_titular' ";

    $resultado2 = mysqli_query($conexion,$consulta2);

    
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }
   
    while($a = mysqli_fetch_assoc($resultado2)){
        $existe2 = $b['nuevo2'];
    }

    // Estructura de decision
       if($existe==0){
        header("Location: formAutomotor.php?mensaje=tres");}
    else if($existe==1){
        header("Location: formAutomotor.php?mensaje=uno");
    }else{
        $alta = "insert into  poliza_automotor (dni_titular,N_poliza,carga_Pdf,vigencia,tipo_veiculo,marca,modelo,tipo_de_uso,Patente,N_Chasis,N_motor ,suma_asegurada ,TipoSeguro,covertura,localidad_automotor  )
        values ('$p_dni_titular','$p_poliza','$p_carga_Pdf','$p_vigencia','$p_tipo_veiculo','$p_marca','$p_modelo','$p_tipo_de_uso','$p_Patente','$p_Chasis','$p_motor','$p_suma_asegurada',
        '$p_TipoSeguro','$p_covertura','$p_localidad_automotor');";
        $resultado_alta = mysqli_query($conexion,$alta);

        header("location:index.php?mensaje=todo ok");
                        
            
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