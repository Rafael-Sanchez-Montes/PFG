<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../estilos/usuario/header_usu.css">
    <link rel="stylesheet" href="../../estilos/usuario/footer_usu.css">
    <link rel="stylesheet" href="../../estilos/admi/anadir_socio.css">

    <title>añadir socio</title>
</head>
<body>
    
    <?php

    require_once("../header_admi_sec.php");
    header_admi_sec();

        require_once("../../usuario/servidor.php");
        $con=conectarServidor();

        echo"<form action='#' method='POST' class='form_añadir' novalidate>
                <div class='row mb-3'>
                    <label for='dni' class='col-sm-2 col-form-label'>
                        DNI:
                    </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' name='dni' id='dni' require>
                    </div>
                    <div class='invalid-feedback'>NO</div>
                </div>

                <div class='row mb-3'>
                    <label for='nombre' class='col-sm-2 col-form-label'>
                        NOMBRE:
                    </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' name='nombre' id='nombre' require>
                    </div>
                </div>

                <div class='row mb-3'>
                    <label for='apellidos' class='col-sm-2 col-form-label'>
                        APELLIDOS:
                    </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' name='apellidos' id='apellidos' require>
                    </div>
                </div>

                <div class='row mb-3'>
                    <label for='telefono' class='col-sm-2 col-form-label'>
                        TELEFONO:
                    </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' name='telefono' id='telefono' require>
                    </div>
                </div>
                
                <div class='row mb-3'>
                    <label for='puntos' class='col-sm-2 col-form-label'>
                        PUNTOS:
                    </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' name='puntos' id='puntos' require>
                    </div>
                </div>

                <div class='row mb-3'>
                    <label for='nombre_soc' class='col-sm-2 col-form-label'>
                        NOMBRE SOCIO:
                    </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' name='nombre_soc' id='nombre_soc' require>
                    </div>
                </div>

                <div class='row mb-3'>
                    <label for='contrasena' class='col-sm-2 col-form-label'>
                        CONTRASEÑA:
                    </label>
                    <div class='col-sm-10'>
                        <input type='password' class='form-control' name='contrasena' id='contrasena' require>
                    </div>
                </div>

                <fieldset class='row mb-3'>
                    <legend class='col-form-label col-sm-2 pt-0'>ACTIVO</legend>
                    <div class='col-sm-10'>
                        <div class='form-check'>
                            <input class='form-check-input' type='radio' name='activo' id='si' value='si' checked>
                            <label class='form-check-label' for='si'>
                                Si
                            </label>
                        </div>
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='activo' id='no' value='no'>
                        <label class='form-check-label' for='no'>
                            No
                        </label>
                    </div>
                </fieldset>

                <input type='submit' class='btn btn-primary' name='confirmar' value='CONFIRMAR'>
            </form>";

            if(isset($_POST['confirmar'])){

                if($_POST['dni']=="" ||
                    $_POST['nombre']=="" ||
                    $_POST['apellidos']=="" ||
                    $_POST['telefono']=="" ||
                    $_POST['puntos']=="" ||
                    $_POST['nombre_soc']=="" ||
                    $_POST['contrasena']==""){
                        echo"
                            <div class='error'>
                                <h2>
                                    ERROR: FALTA ALGÚN DATO !!
                                </h2>
                            </div>
                            <META HTTP-EQUIV='REFRESH' CONTENT='5; URL=ad_socio.php'>
                        ";
                }else{
                    $buscar="select dni
                            from socio
                            where dni='$_POST[dni]'";
                    $res=$con->query($buscar);
                    $fila=$res->fetch_array(MYSQLI_ASSOC);

                    if($res->num_rows==0){

                        if($_POST['activo']=='si'){
                            $activo='s';
                        }else{
                            $activo='n';
                        }
                        
                        $insertar="insert into socio
                                    values(
                                        null,
                                        '$_POST[dni]',
                                        '$_POST[nombre]',
                                        '$_POST[apellidos]',
                                        '$_POST[telefono]',
                                        '$_POST[puntos]',
                                        '$_POST[nombre_soc]',
                                        '$_POST[contrasena]',
                                        '$activo'
                                    )";
                        $ins=$con->query($insertar);

                            if($ins!=null){
                                
                                echo"
                                    <div class='correcto'>
                                        <h2>
                                            SOCIO INSERTADO
                                        </h2>
                                    </div>
                                    <META HTTP-EQUIV='REFRESH' CONTENT='3; URL=ad_socio.php'>
                                ";
                            }

                    }else{
                        echo"
                            <div class='error'>
                                <h2>
                                    ERROR: ESE USUSARIO YA EXISTE !!
                                </h2>
                            </div>
                            <META HTTP-EQUIV='REFRESH' CONTENT='5; URL=ad_socio.php'>
                        ";
                    }
                }

            }
            require_once("../../usuario/footer.php");
            footer_usu();
    ?>

</body>
</html>