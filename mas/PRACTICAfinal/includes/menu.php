<?php
    function menu(){ ?>
        <!-- Etiqueta NAV general -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">

            <!-- Enlace al inicio y boton responsive -->    
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>    

        <!-- div colapsable y lista final -->    
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            
                <!-- Elementos de la lista del menu -->
                <li class="nav-item active">

                <a class="nav-link" href="formulario.php">ingreso cliente</a>
                
                </li>

                <li class="nav-item active">

                    <a class="nav-link" href="bdd.php">Base de datos</a>
               
                </li>

                <li class="nav-item active">

                    <a class="nav-link" href="formAutomotor.php">ingreso de veiculo</a>
               
                </li>

            </ul>
        </div>                            
            
            </div>
        </nav>        
    <?php
    }
?>