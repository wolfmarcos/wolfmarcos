<?php

        //Paso 1) Datos de conexion.
        $usuario = '3753611_empleadoseg';
        $clave = '8@A5po4M6Vw7jOtS';
        $servidor = 'fdb29.atspace.me';
        $basededatos = '3753611_empleadoseg';
        // Paso 2) Creamos la conexion al servidor.
        $conexion = mysqli_connect($servidor,$usuario,$clave)
        or die('No se pudo conectar al servidor');
        mysqli_set_charset($conexion,'utf-8');

        // Paso 3) Conectamos con la BDD
        $bdd = mysqli_select_db($conexion,$basededatos)
        or die('No se pudo conectar con la base de datos');


?>