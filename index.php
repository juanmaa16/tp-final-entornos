<?php include 'disenio.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">

        <!-- Carrousel de imagenes -->
        <link rel="stylesheet" type="text/css" href="plugins/elastslide/css/elastislide.css" />
        <link rel="stylesheet" type="text/css" href="plugins/elastslide/css/custom.css" />
        <script src="plugins/elastslide/js/modernizr.custom.17475.js"></script>
        <!-- Fin carrousel de imagenes -->
    </head>
    <body>
        <div id="contenedor">
            <?php cabecera(); ?>
            <div id="principal">
                <?php menu(); ?>
                <div id="contenido-index">
                    <img src="images/ima_principal.png"/>
                    <div id="universidades-adheridas">
                        <h1>UNIVERSIDADES ADHERIDAS</h1>
                        <ul id="carousel" class="elastislide-list">
                            <li><a href="#"><img src="images/logos/uca.png" alt="image01" /></a></li>
                            <li><a href="#"><img src="images/logos/abogacia.png" alt="image02" /></a></li>
                            <li><a href="#"><img src="images/logos/utn.png" alt="image03" /></a></li>
                            <li><a href="#"><img src="images/logos/austral.png" alt="image04" /></a></li>
                            <li><a href="#"><img src="images/logos/humanidades.png" alt="image05" /></a></li>
                            <li><a href="#"><img src="images/logos/iea.png" alt="image06" /></a></li>
                            <li><a href="#"><img src="images/logos/ishyr.png" alt="image07" /></a></li>
                            <li><a href="#"><img src="images/logos/iugr.png" alt="image08" /></a></li>
                            <li><a href="#"><img src="images/logos/medicina.png" alt="image09" /></a></li>
                            <li><a href="#"><img src="images/logos/odontologia.png" alt="image10" /></a></li>
                            <li><a href="#"><img src="images/logos/siglo21.png" alt="image11" /></a></li>
                            <li><a href="#"><img src="images/logos/uai.png" alt="image12" /></a></li>
                            <li><a href="#"><img src="images/logos/ucel.png" alt="image13" /></a></li>
                            <li><a href="#"><img src="images/logos/iunir.png" alt="image13" /></a></li>

                        </ul>
                    </div>
                </div>

            </div>
            <?php pie(); ?>
        </div>


        <!-- Carrousel de imagenes -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="plugins/elastslide/js/jquerypp.custom.js"></script>
        <script type="text/javascript" src="plugins/elastslide/js/jquery.elastislide.js"></script>
        <script type="text/javascript">
			
            $( '#carousel' ).elastislide();
			
        </script>
        <!-- Fin Carrousel de imagenes -->

    </body>
</html>
