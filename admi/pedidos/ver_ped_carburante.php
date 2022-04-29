<?php

    function ver_ped_carburante(){
        require_once("../../usuario/servidor.php");
        $con=conectarServidor();

        $datos="select *
                from pedido_car
                where confirmado='n'";
        $res=$con->query($datos);

        echo"<table class='table table-hover'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>ID SOCIO</th>
                        <th scope='col'>CODIGO CARBURANTE</th>
                        <th scope='col'>FECHA</th>
                        <th scope='col'>PRECIO</th>
                        <th scope='col'>TOTAL</th>
                        <th scope='col'>CONFIRMAR</th>
                    </tr>
                </thead>
                <tbody>";
                while($fila=$res->fetch_array(MYSQLI_ASSOC)){
                    echo"<tr>
                            <th scope='row'>$fila[codigo]</th>
                            <td>$fila[id_socio]</td>
                            <td>$fila[id_carburante]</td>";
                            
                            $partir=explode('-',$fila['fecha']);
                            $ano=$partir[0];
                            $mes=$partir[1];
                            $dia=$partir[2];

                    echo"   <td>$dia-$mes-$ano</td>
                            <td>$fila[precio]</td>
                            <td>$fila[total]</td>";
    
                            echo" 
                                <td>
                                    <form action='revisar_carburante.php' method='POST'>
                                        <input type='hidden' name='cod' value='$fila[codigo]'>
                                        <input type='submit' class='btn btn-primary' name='confirmar' value='CONFIRMAR'>
                                    </form>
                                </td>
                        </tr>";
                }
    
            echo"   </tbody>
                </table>";
    }

?>