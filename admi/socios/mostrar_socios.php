<?php

    function mostrar_socios(){
        require_once("../../usuario/servidor.php");
        $con=conectarServidor();

        echo"<div class='formulario'>
            <form action='anadir_socio.php' method='POST'>
                    <label class='container'>
                        <h3>Añadir un nuevo socio:</h3>
                    </label>
                    <input type='submit' class='btn btn-primary' name='anadir' value='AÑADIR'>
            </form>
            </div>";

        $datos="select *
                from socio
                where id<>0";
        $res=$con->query($datos);

        echo"<table class='table table-hover'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>DNI</th>
                        <th scope='col'>NOMBRE</th>
                        <th scope='col'>APELLIDOS</th>
                        <th scope='col'>TELÉFONO</th>
                        <th scope='col'>PUNTOS</th>
                        <th scope='col'>NOMBRE SOCIO</th>
                        <th scope='col'>CONTRASEÑA</th>
                        <th scope='col'>ACTIVO</th>
                        <th scope='col'>EDITAR</th>
                    </tr>
                </thead>
                <tbody>";

        while($fila=$res->fetch_array(MYSQLI_ASSOC)){
                echo"<tr>
                        <th scope='row'>$fila[id]</th>
                        <td>$fila[dni]</td>
                        <td>$fila[nombre]</td>
                        <td>$fila[apellidos]</td>
                        <td>$fila[telefono]</td>
                        <td>$fila[puntos]</td>
                        <td>$fila[nombre_soc]</td>
                        <td>$fila[contrasena]</td>";
                        if($fila['activo']=='s'){
                    echo"<td class='si'>SI</td>";
                        }else{
                    echo"<td class='no'>NO</td>";
                        }
                        echo" 
                            <td>
                                <form action='editar_socio.php' method='POST'>
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