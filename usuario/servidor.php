<?php
    function conectarServidor(){
        $con = new mysqli("localhost", "root", "", "almazara");
        $con->set_charset("utf8");
        return($con);
    }
?>