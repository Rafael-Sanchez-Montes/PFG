<?php
    function mos_premios(){

        require_once("../servidor.php");
        $con=conectarServidor();

        $datos="select id, imagen
                from premios
                order by id desc
                limit 25";
        $res=$con->query($datos);

        echo"<div class='cajon_foto'>";

        while($fila=$res->fetch_array(MYSQLI_ASSOC)){
            echo "<img src='../../imagenes/premios/$fila[imagen].jpg' class='foto_premio'>";
        }

        echo"</div>";
    }        
?>
