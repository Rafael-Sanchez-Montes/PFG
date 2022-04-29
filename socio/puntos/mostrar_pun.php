<?php

    function mostrar_pun(){

        require_once("../../usuario/servidor.php");
        $con=conectarServidor();

        $puntos="select puntos
                from socio
                where id=$_SESSION[socio]";
        $res=$con->query($puntos);
        $fila=$res->fetch_array(MYSQLI_ASSOC);

        $puntos_act=$fila['puntos'];

        $suma_aceite="select sum(total) suma_aceite
                    from pedido_aceite
                    where id_socio=$_SESSION[socio]";
        $res=$con->query($suma_aceite);
        $fila_ace=$res->fetch_array(MYSQLI_ASSOC);

        $suma_maquina="select sum(total) suma_maquina
                    from pedido_maq
                    where id_socio=$_SESSION[socio]";
        $res=$con->query($suma_maquina);
        $fila_maq=$res->fetch_array(MYSQLI_ASSOC);

        $suma_carburante="select sum(total) suma_carburante
                    from pedido_car
                    where id_socio=$_SESSION[socio]";
        $res=$con->query($suma_carburante);
        $fila_car=$res->fetch_array(MYSQLI_ASSOC);

        $sum_pro=$fila_ace['suma_aceite'] + $fila_maq['suma_maquina'] + $fila_car['suma_carburante'];

        if($sum_pro==0){
            $sum_pro=0;
        }

        echo"<div class='container'>
                <div class='resumen'>
                    <h2>
                        RESUMEN DE LA GESTIÓN DE PUNTOS
                    </h2>
                    <hr>
                    <div class='cuadro'>
                        <h3>
                            Puntos actuales: $puntos_act <br>
                            Total gastado en productos: $sum_pro
                        </h3>
                    </div>
                </div>
            ";

        $list_aceite="select nombre, cantidad, fecha, pre_pun, total
                    from aceite, pedido_aceite
                    where aceite.codigo = pedido_aceite.cod_aceite and
                            id_socio=$_SESSION[socio]";
        $res=$con->query($list_aceite);

        echo"
            <table class='table table-striped table-hover'>
                <thead>
                    <tr>
                        <th scope='col'># ACEITE</th>
                        <th scope='col'>NOMBRE</th>
                        <th scope='col'>CANTIDAD</th>
                        <th scope='col'>FECHA</th>
                        <th scope='col'>PUNTOS/UD</th>
                        <th scope='col'>TOTAL</th>
                    </tr>
                </thead>
                <tbody>";
                $contador=0;

                while($fila_aceite=$res->fetch_array(MYSQLI_ASSOC)){
                    $contador++;
                    echo"
                        <tr>
                            <th scope='row'>$contador</th>
                            <td>$fila_aceite[nombre]</td>
                            <td>$fila_aceite[cantidad]</td>";

                            $partir=explode("-", $fila_aceite['fecha']);
                            $pri=$partir[0];
                            $seg=$partir[1];
                            $ter=$partir[2];

                        echo"<td>$ter-$seg-$pri</td>
                            <td>$fila_aceite[pre_pun]</td>
                            <td>$fila_aceite[total]</td>
                        </tr>";
                }
        echo"   </tbody>
            </table>";

            $list_maquina="select nombre, fecha, pre_pun, total
                    from maquina, pedido_maq
                    where maquina.codigo = pedido_maq.cod_maq and
                            id_socio=$_SESSION[socio]";
        $res=$con->query($list_maquina);

        echo"
            <table class='table table-striped table-hover'>
                <thead>
                    <tr>
                        <th scope='col'># MAQUINA</th>
                        <th scope='col'>NOMBRE</th>
                        <th scope='col'>FECHA</th>
                        <th scope='col'>PUNTOS/UD</th>
                        <th scope='col'>TOTAL</th>
                    </tr>
                </thead>
                <tbody>";
                $contador=0;

                while($fila_maquina=$res->fetch_array(MYSQLI_ASSOC)){
                    $contador++;
                    echo"
                        <tr>
                            <th scope='row'>$contador</th>
                            <td>$fila_maquina[nombre]</td>";

                            $partir=explode("-", $fila_maquina['fecha']);
                            $pri=$partir[0];
                            $seg=$partir[1];
                            $ter=$partir[2];

                        echo"<td>$ter-$seg-$pri</td>
                            <td>$fila_maquina[pre_pun]</td>
                            <td>$fila_maquina[total]</td>
                        </tr>";
                }
        echo"   </tbody>
            </table>";

            $list_pro="select tipo, precio_l, fecha, total
                    from carburante, pedido_car
                    where carburante.codigo = pedido_car.id_carburante and
                            id_socio=$_SESSION[socio]";
        $res=$con->query($list_pro);

        echo"
            <table class='table table-striped table-hover'>
                <thead>
                    <tr>
                        <th scope='col'># CARBURANTE</th>
                        <th scope='col'>TIPO</th>
                        <th scope='col'>FECHA</th>
                        <th scope='col'>PUNTOS/L</th>
                        <th scope='col'>TOTAL</th>
                    </tr>
                </thead>
                <tbody>";
                $contador=0;

                while($fila_tab=$res->fetch_array(MYSQLI_ASSOC)){
                    $contador++;
                    echo"
                        <tr>
                            <th scope='row'>$contador</th>
                            <td>$fila_tab[tipo]</td>";

                            $partir=explode("-", $fila_tab['fecha']);
                            $pri=$partir[0];
                            $seg=$partir[1];
                            $ter=$partir[2];

                        echo"<td>$ter-$seg-$pri</td>
                            <td>$fila_tab[precio_l]</td>
                            <td>$fila_tab[total]</td>
                        </tr>";
        }
        echo"   </tbody>
            </table>";
            
    echo"</div>";
    }

?>