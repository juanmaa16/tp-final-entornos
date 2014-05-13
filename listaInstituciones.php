<?php
@include_once 'init.php';
include_once ROOT_DIR . '/entidades/institucion.php';
include_once ROOT_DIR . '/servicios/servicios.php';
include 'disenio.php';
$servicios = new Servicios();
$vInstituciones = $servicios->getInstituciones();

$perPage = 10;
$total_results = 0;
if (!isset($_GET['pag'])) {
    $page = 1;
} else {
    $page = $_GET['pag'];
}
$from = (($page * $perPage - $perPage));
$servicios = new Servicios();
$vInstituciones = $servicios->getInstitucionesPag($from, $perPage);
$total_results = count($servicios->getInstituciones());
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
                    <h1>LISTADO DE INSTITUCIONES</h1>
                    <hr>
                    <table id="usuarios" border="0">
                        <?php
                        if (!empty($vInstituciones)) {
                            foreach ($vInstituciones as $oInstitucion) {
                                ?>

                                <tr>
                                    <td width="90%">
                                        <a href="institucion.php?id=<?php echo $oInstitucion->getId(); ?>">
                                            <img id="logo-list" src="http://placehold.it/90x90&text=logo"/><?php echo $oInstitucion->getNombre(); ?>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "No hay instituciones";
                        }
                        ?>                        
                    </table>
                    <div id="tnt_pagination" style="clear: both;text-align: center;margin-bottom: 20px;">

                        <?php
                        $total_paginas = ceil($total_results / $perPage);
                        if ($total_paginas > 1) {
                            for ($i = 1; $i <= $total_paginas; $i++) {
                                $prev = ($page - 1);
                                echo '<a href="?pag=' . $prev . '">&lt;</a>';
                            }
                        } elseif ($total_paginas == 1 || $page == 1) {
                            echo '<span class="disabled_tnt_pagination"><<</span>';
                        }
                        for ($i = 1; $i <= $total_paginas; $i++) {
                            if ($page == $i) {
                                echo '<a href="#" style="color: #004BB3;"><b> ' . $i . ' </b></a>';
                            } else {
                                echo '<a href="?pag=' . $i . '"> ' . $i . ' </a>';
                            }
                        }
                        if ($page < $total_paginas) {
                            $next = ($page + 1);
                            echo '<a href="?pag=' . $next . '"> >></a>';
                        }
                        if ($page == $total_paginas) {
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
