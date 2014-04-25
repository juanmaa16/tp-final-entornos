<?php

@include_once 'init.php';
include_once ROOT_DIR . '/conf/conf.php';

class Conexion {

    private $conn;
    private $n; //numero de registros

    function __construct() {
        $dbConf = new Configuracion();
        $databaseURL = $dbConf->get_databaseURL();
        $databaseUName = $dbConf->get_databaseUName();
        $databasePWord = $dbConf->get_databasePWord();
        $databaseName = $dbConf->get_databaseName();
        $this->conn = @mysql_connect($databaseURL, $databaseUName, $databasePWord);
        mysql_select_db($databaseName);
    }

    function query($query) {
        $mysql_result = @mysql_query($query);
        $this->n = @mysql_num_rows($mysql_result);
        if ($this->n) {
            for ($i = 0; $i < $this->n; $i++) {
                $tabla[$i] = @mysql_fetch_array($mysql_result);
            }
        } else {
            $tabla = null;
        }
        if ($this->n > 0) {
            mysql_free_result($mysql_result);
        }
        return $tabla;
    }

    function __destruct() {
        @mysql_close($this->conn);
    }

}

?>
