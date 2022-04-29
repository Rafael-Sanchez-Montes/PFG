<?php
    function mostrar_maquina(){

        require_once("../../usuario/servidor.php");
        $con=conectarServidor();

        $datos="select codigo, nombre, descripcion, foto, pre_pun
                from maquina
                where activo='s'";
        $res=$con->query($datos);
        echo"
            <h1 class='titulo_pro'>Nuestras maquinas</h1>
            <div class='grupo_cartas'>
        ";
            while($fila=$res->fetch_array(MYSQLI_ASSOC)){
                echo"
                <div class='cartas'>
                    <img src='../../imagenes/productos/maquina/$fila[foto].jpg'>";

                echo"<div class='info'>
                        <p>
                            $fila[pre_pun] puntos <br>
                            $fila[nombre] <br>
                        </p>
                    </div>
                    <div class='formu'>
                        <form name='comprar_maquina.php' action='comprar_maquina.php' method='POST'>
                            <input type='hidden' name='codigo' value='$fila[codigo]'>
                            <input type='submit' class='btn btn-primary mb-3' name='informacion' value='información'>
                        </form>
                    </div>
                </div>
                ";
            }
        echo"</div>";
        $con->close();
    }
?>

