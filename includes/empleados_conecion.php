<?php

        //Paso 1) Datos de conexion.
        $usuario = 'id16248795_tp1';
        $clave = '<2^5#vMaP+=30#]x';
        $servidor = 'https://databases-auth.000webhost.com/index.php';
        $basededatos = 'id16248795_marcos';

        // Paso 2) Creamos la conexion al servidor.
        $conexion = mysqli_connect($servidor,$usuario,$clave)
        or die('No se pudo conectar al servidor');
        mysqli_set_charset($conexion,'utf-8');

        // Paso 3) Conectamos con la BDD
        $bdd = mysqli_select_db($conexion,$basededatos)
        or die('No se pudo conectar con la base de datos');


?>