<?php

    function perfil(){

        require_once("../../usuario/servidor.php");
        $con=conectarServidor();

        $datos="select *
                from socio
                where id=$_SESSION[socio]";
        $res=$con->query($datos);

        $fila=$res->fetch_array(MYSQLI_ASSOC);

        echo"
            <div class='container'>
                <form class='row g-4 needs-validation' method='POST' novalidate>
                    <div class='col-md-4'>
                        <label for='nombre' class='form-label'>
                            NOMBRE:
                        </label>
                        <input type='text' class='form-control' id='nombre' name='nombre' value=$fila[nombre] readonly>
                    </div>

                    <div class='col-md-4'>
                        <label for='apellidos' class='form-label'>
                            APELLIDOS:
                        </label>
                        <input type='text' class='form-control' id='apellidos' name='apellidos' value=$fila[apellidos] readonly>
                    </div>

                    <div class='col-md-4'>
                        <label for='telefono' class='form-label'>
                            TELÉFONO:
                        </label>
                        <input type='text' class='form-control' id='telefono' name='telefono' value=$fila[telefono] required>
                    </div>

                    <div class='col-md-4'>
                        <label for='puntos' class='form-label'>
                            PUNTOS:
                        </label>
                        <input type='text' class='form-control' id='puntos' name='puntos' value=$fila[puntos] readonly>
                    </div>

                    <div class='col-md-4'>
                        <label for='nombre_soc' class='form-label'>
                            NOMBRE DE SOCIO:
                        </label>
                        <input type='text' class='form-control' id='nombre_soc' name='nombre_soc' value=$fila[nombre_soc] required>
                    </div>
                    <div class='col-md-4'>
                        <label for='contrasena' class='form-label'>
                            CONTRASEÑA:
                        </label>
                        <input type='password' class='form-control' id='contrasena' name='contrasena'>
                    </div>

                    <div>
                        <button class='btn btn-primary' type='submit' name='modificar' value='modificar'>MODIFICAR</button>
                    </div>
                </form>
            </div>
        ";

        if(isset($_POST['modificar'])){
            $telefono=$_POST['telefono'];
            $nombre_soc=$_POST['nombre_soc'];
            $contrasena=$_POST['contrasena'];

            if($contrasena==null){
                $contrasena=$fila['contrasena'];
            }

            $cambio="
                update socio set
                    telefono='$telefono',
                    nombre_soc='$nombre_soc',
                    contrasena='$contrasena'
                where id='$_SESSION[socio]';
            ";
            $res=$con->query($cambio);

            $con->close();

            echo"<h2 class='hecho'>Has modificado tus datos</h2>
            
            <META HTTP-EQUIV='REFRESH' CONTENT='2; URL=soc_perfil.php'>";
            
        }

    }

?>