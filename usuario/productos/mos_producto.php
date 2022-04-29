<?php
    function mos_producto(){

        require_once("../../usuario/servidor.php");
        $con=conectarServidor();

        $datos="select codigo, nombre, cantidad, foto, precio, premiado, limitado
                from aceite
                where activo='s'";
        $res=$con->query($datos);
        echo"
            <h1 class='titulo_pro'>Nuestros Aceites</h1>
            <div class='grupo_cartas'>
        ";
            while($fila=$res->fetch_array(MYSQLI_ASSOC)){
                echo"
                <div class='cartas'>
                    <img src='../../imagenes/productos/aceite/$fila[foto].jpg'>";

                    if($fila['premiado']=='s'){
                        echo"<br><button class='btn btn-success'>PREMIADO</button>";
                    }elseif($fila['limitado']=='s'){
                        echo"<br><button class='btn btn-danger'>PRODUCTO LIMITADO</button>";
                    }else{
                        echo"<div class='relleno'></div>";
                    }

                echo"<div class='info'>
                        <p>
                            $fila[precio]€ <br>
                            $fila[nombre] <br>
                            $fila[cantidad]
                        </p>
                    </div>
                    <div class='formu'>
                        <form name='info_pro.php' action='info_pro.php' method='POST'>
                            <input type='hidden' name='codigo' value='$fila[codigo]'>
                            <input type='submit' class='btn btn-primary mb-3' name='informacion' value='INFORMACIÓN'>
                        </form>
                    </div>
                </div>
                ";
            }
        echo"</div>";
        $con->close();
    }
?>

