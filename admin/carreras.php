<?php
require 'admin_check.php';
@include_once '../init.php';
include_once ROOT_DIR . '/entidades/carrera.php';
include_once ROOT_DIR . '/servicios/servicios.php';

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
//TODO: Agregar validacion si es administrador o institucion y llamar a sus metodos para listar
$vCarreras = $servicios->getCarrerasPag($from, $perpage);
$total_results = count($servicios->getCarreras());
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/menu.css">
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery.validate.js"></script>
    </head>
    <body>
        <div id="contenedor">
            <div id="header">
                <a href="../index.html"><img id="logo" src="../images/logo.png"/></a>
                <div id="buscador">
                    <form action="" method="get">
                        <!--<input type="text" placeholder="Buscar..."/>-->
                    </form>
                </div>
            </div>
            <div id="principal">
                <div id="menu">
                    <ul id="css3menu1" class="topmenu">
                        <li class="topfirst"><a href="index.html" style="width:179px;height:28px;line-height:28px;"><img src="../images/home-home-icone-9323-128-as.png" alt=""/>&nbsp</a></li>
                        <li class="topmenu"><a href="carreras.php" style="width:179px;height:28px;line-height:28px;"><span>CARRERAS</span></a></li>
                        <li class="topmenu"><a href="instituciones.php" style="width:178px;height:28px;line-height:28px;">INSTITUCIONES</a></li>
                        <li class="topmenu"><a href="areas_int.php" style="width:178px;height:28px;line-height:28px;">AREAS DE INTERES</a></li>
                        <li class="toplast"><a href="index.html" style="width:179px;height:28px;line-height:28px;">CONTACTO</a></li>
                    </ul>
                </div>
                <div id="contenido-admin">
                    <h1>CARRERAS</h1>
                    <table id="carreras" border="0">

                        <?php
                        foreach ($vCarreras as $oCarrera) {
                            echo '<tr>';
                            echo '<td width="90%">' . $oCarrera->getNombre() . '</td>';
                            echo '<td><a data="Editar carrera" href="carrera_modifica.php?id=' . $oCarrera->getId() . '"><img src="../images/edit.png"/></a></td>';
                            echo '<td><a data="Eliminar carrera" href="carrera_abm.php?action=baja&id=' . $oCarrera->getId() . '"><img src="../images/delete.png"/></a></td>';
                            echo '</tr>';
                        }
                        ?>
                    </table>
                    <a href="carrera_alta.php">Nueva carrera</a>

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
                                echo '<a href="#"><b> ' . $i . ' </b></a>';
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
            </div>
            <div id="footer">
            </div>
        </div>
    </body>
</html>

