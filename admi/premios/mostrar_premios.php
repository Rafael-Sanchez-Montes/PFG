<?php

    function mostrar_premios(){
        require_once("../../usuario/servidor.php");
        $con=conectarServidor();

        echo"<div class='formulario'>
                <form action='anadir_premio.php' method='POST'>
                    <label class='container'>
                        <h3>Añadir un nuevo premio:</h3>
                    </label>
                    <input type='submit' class='btn btn-primary' name='anadir' value='AÑADIR'>
                </form>
            </div>";
        
        $datos="select *
                from premios";
        $res=$con->query($datos);

        echo"<table class='table table-hover'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>NOMBRE</th>
                        <th scope='col'>IMAGEN</th>
                        <th scope='col'>ACTIVO</th>
                        <th scope='col'>EDITAR</th>
                    </tr>
                </thead>
                <tbody>";

        while($fila=$res->fetch_array(MYSQLI_ASSOC)){

            $partir=explode(".", $fila['imagen']);
            $pri=$partir[0];

                echo"<tr>
                        <th scope='row'>$fila[id]</th>
                        <td>$fila[nombre]</td>
                        <td>
                            <img src='../../imagenes/premios/$pri.jpg'>
                        </td>";

                        if($fila['activo']=='s'){
                    echo"<td class='si'>SI</td>";
                        }else{
                    echo"<td class='no'>NO</td>";
                        }

                        echo" 
                            <td>
                                <form action='editar_premio.php' method='POST'>
                                    <input type='hidden' name='id' value='$fila[id]'>
                                    <input type='submit' class='btn btn-primary' name='editar' value='EDITAR'>
                                </form>
                            </td>
                    </tr>";
        }

        echo"   </tbody>
            </table>";

    }

?>