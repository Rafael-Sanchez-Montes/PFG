<?php

    function ver_aceite(){
        require_once("../../usuario/servidor.php");
        $con=conectarServidor();

        $datos="select *
                from aceite";
        $res=$con->query($datos);

        echo"<table class='table table-hover'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>NOMBRE</th>
                        <th scope='col'>CANTIDAD</th>
                        <th scope='col'>FOTO</th>
                        <th scope='col'>PRECIO</th>
                        <th scope='col'>PUNTOS</th>
                        <th scope='col'>ACTIVO</th>
                        <th scope='col'>PREMIADO</th>
                        <th scope='col'>LIMITADO</th>
                        <th scope='col'>EDITAR</th>
                    </tr>
                </thead>
                <tbody>";

        while($fila=$res->fetch_array(MYSQLI_ASSOC)){
                echo"<tr>
                        <th scope='row'>$fila[codigo]</th>
                        <td>$fila[nombre]</td>
                        <td>$fila[cantidad]ML</td>
                        <td>
                            <img src='../../imagenes/productos/aceite/$fila[foto].jpg'>
                        </td>
                        <td>$fila[precio]€</td>
                        <td>$fila[pre_pun]</td>";

                        if($fila['activo']=='s'){
                    echo"<td class='si'>SI</td>";
                        }else{
                    echo"<td class='no'>NO</td>";
                        }

                        if($fila['premiado']=='s'){
                    echo"<td class='si'>SI</td>";
                        }else{
                    echo"<td class='no'>NO</td>";
                        }

                        if($fila['limitado']=='s'){
                    echo"<td class='si'>SI</td>";
                        }else{
                    echo"<td class='no'>NO</td>";
                        }

                        echo" 
                            <td>
                                <form action='editar_aceite.php' method='POST'>
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