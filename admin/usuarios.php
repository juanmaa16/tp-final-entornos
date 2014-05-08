<?php
@include_once '../init.php';
include_once ROOT_DIR . '/entidades/institucion.php';
include_once ROOT_DIR . '/servicios/servicios.php';
$perPage=2;
$total_results = 0;
if (!isset($_GET['pag'])) {
    $page = 1;
} else {
    $page = $_GET['pag'];
}
$from = (($page * $perPage - $perPage));
$servicios=new Servicios();
$vInstituciones=$servicios->getInstitucionesPag($from,$perPage);
$total_results = count($servicios->getInstituciones());
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
                 <!--   <form action="" method="get">
                        <input type="text" placeholder="Buscar..."/
                    </form>>-->
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
                    <h1>USUARIOS</h1>
                    <?php if(!empty ($vInstituciones)) {foreach($vInstituciones as $oInstitucion){?>
                    <table id="usuarios" border="0">
                        <tr>
                            <td width="90%"><?php echo $oInstitucion->getNombre();?></td>
                            <td><a data="Editar institución" href=""><img src="../images/edit-inst.png"/></a></td>
                            <td><a data="Editar usuario" href="institucion_modifica.php"><img src="../images/edit.png"/></a></td>
                            <td><a data="Eliminar usuario" href="institucion_abm.php?action=baja&id=<?php echo $oInstitucion->getId();?>"><img src="../images/delete.png"/></a></td>
                        </tr>
                        
                        <?php }
					}else{
						echo "No hay instituciones";
					}?>                        
                    </table>
                    
                    <?php 
$total_paginas = ceil($total_results/$perPage);	
if ($total_paginas > 1)
{
	for($i = 1;$i <= $total_paginas; $i++)
	{
      $prev = ($page - 1);
      echo '<a href="?pag=' . $prev . '">&lt;</a>';
	}
}elseif ($total_paginas == 1 || $page == 1) 
{
     echo '<span class="disabled_tnt_pagination"><<</span>';
}
	 for ($i = 1; $i <= $total_paginas; $i++) {
     if ($page == $i) {
                    echo '<a href="#"><b> ' . $i . ' </b></a>';
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
            <div id="footer">
            </div>
        </div>
    </body>
</html>

