<?php
@include_once 'init.php';
include_once ROOT_DIR . '/entidades/carrera.php';
include_once ROOT_DIR . '/entidades/institucion.php';
include_once ROOT_DIR . '/servicios/servicios.php';
include 'disenio.php';

$perpage = 10;
$total_results = 0;
if (!isset($_GET['pag']) || ($_GET['pag']) == 1) {
    $page = 1;
    $from = 0;
} else {
    $page = $_GET['pag'];
    $from = (($page * $perpage - $perpage));
}
$servicios = new Servicios();
$vCarreras = $servicios->getCarrerasPag($from, $perpage);
$total_results = count($servicios->getCarreras());
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
    </head>
    <body>
        <div id="contenedor">
            <?php cabecera(); ?>
            <div id="principal">
                <?php menu(); ?>
                <div id="contenido">
                    <h1>LISTADO DE CARRERAS</h1>
                    <hr>
                    <ul id="lista-carr">
                        <?php
                        foreach ($vCarreras as $oCarrera) {
                            $oInstitucion = $servicios->getInstitucionById($oCarrera->getIdInstitucion());
                            //Falta hacer lo del logo
                            echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '"> <img id="logo-list" src="http://placehold.it/90x90&text=logo"/>' . $oCarrera->getNombre() . ' - '.$oInstitucion->getNombre().'</a></li>';
                        }
                        ?>
                    </ul>

                    <div id="tnt_pagination" style="clear: both;text-align: center;margin-bottom: 20px;">
                        <?php
                        //PAGINACION
                        $total_pages = ceil($total_results / $perpage);
                        if ($page > 1) {
                            $prev = ($page - 1);
                            echo '<a href="?pag=' . $prev . '">&lt;&lt;</a>';
                        } elseif ($total_pages == 1 || $page == 1) {
                            echo '<span class="disabled_tnt_pagination"><<</span>';
                        }

                        for ($i = 1; $i <= $total_pages; $i++) {
                            if ($page == $i) {
                                echo '<a href="#" style="color: #004BB3;"><b> ' . $i . ' </b></a>';
                            } else {
                                echo '<a href="?pag=' . $i . '"> ' . $i . ' </a>';
                            }
                        }

                        if ($page < $total_pages) {
                            $next = ($page + 1);
                            echo '<a href="?pag=' . $next . '"> >></a>';
                        }
                        if ($page == $total_pages) {
                            echo '<span class="disabled_tnt_pagination">>></span>';
                        }
                        ?>
                    </div>

                </div>
                <div id="publicidades">
                    publicidad
                </div>

            </div>
            <?php pie(); ?>
        </div>
    </body>
</html>
