<?php

    function ver_maquina(){
        require_once("../../usuario/servidor.php");
        $con=conectarServidor();

        $datos="select *
                from maquina";
        $res=$con->query($datos);

        echo"<table class='table table-hover'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>NOMBRE</th>
                        <th scope='col'>FOTO</th>
                        <th scope='col'>PUNTOS</th>
                        <th scope='col'>ACTIVO</th>
                        <th scope='col'>EDITAR</th>
                    </tr>
                </thead>
                <tbody>";

        while($fila=$res->fetch_array(MYSQLI_ASSOC)){
                echo"<tr>
                        <th scope='row'>$fila[codigo]</th>
                        <td>$fila[nombre]</td>
                        <td>
                            <img src='../../imagenes/productos/maquina/$fila[foto].jpg'>
                        </td>
                        <td>$fila[pre_pun]</td>";

                        if($fila['activo']=='s'){
                    echo"<td class='si'>SI</td>";
                        }else{
                    echo"<td class='no'>NO</td>";
                        }

                        echo" 
                            <td>
                                <form action='editar_maquina.php' method='POST'>
                                    <input type='hidden' name='id' value='$fila[codigo]'>
                                    <input type='submit' class='btn btn-primary' name='editar' value='EDITAR'>
                                </form>
                            </td>
                    </tr>";
        }

        echo"   </tbody>
            </table>";

    }

?>
