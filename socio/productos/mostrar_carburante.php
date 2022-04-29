<?php
    function mostrar_carburante(){

        require_once("../../usuario/servidor.php");
        $con=conectarServidor();

        $datos="select *
                from carburante
                where activo='s'";
        $res=$con->query($datos);
        echo"
            <h1 class='titulo_pro'>Nuestros carburantes</h1>
            <div class='grupo_cartas'>
        ";
            while($fila=$res->fetch_array(MYSQLI_ASSOC)){
                echo"
                <div class='cartas'>
                    <img src='../../imagenes/productos/carburante/$fila[foto].jpg'>";


                echo"<div class='info'>
                        <p>
                            $fila[precio_l] puntos <br>
                            $fila[tipo]
                        </p>
                    </div>
                    <div class='formu'>
                        <form name='comprar_aceite.php' action='comprar_carburante.php' method='POST'>
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

