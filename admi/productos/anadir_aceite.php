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
                    <label for='nombre' class='col-sm-2 col-form-label'>
                        NOMBRE:
                    </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' name='nombre' id='nombre' require>
                    </div>
                </div>

                <div class='row mb-3'>
                    <label for='cantidad' class='col-sm-2 col-form-label'>
                        CANTIDAD:
                    </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' name='cantidad' id='cantidad' require>
                    </div>
                </div>

                <div class='row mb-3'>
                    <label for='descripcion' class='col-sm-2 col-form-label'>
                        DESCRIPCION:
                    </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' name='descripcion' id='descripcion' require>
                    </div>
                </div>

                <div class='row mb-3'>
                    <label for='foto' class='col-sm-2 col-form-label'>
                        FOTO:
                    </label>
                    <div class='col-sm-10'>
                        <input type='file' class='form-control' name='foto' id='foto' accept='image/jpeg'>
                    </div>
                </div>
                
                <div class='row mb-3'>
                    <label for='precio' class='col-sm-2 col-form-label'>
                        PRECIO:
                    </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' name='precio' id='precio' require>
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

                <fieldset class='row mb-3'>
                    <legend class='col-form-label col-sm-2 pt-0'>PREMIADO</legend>
                    <div class='col-sm-10'>
                        <div class='form-check'>
                            <input class='form-check-input' type='radio' name='premiado' id='si' value='si' checked>
                            <label class='form-check-label' for='si'>
                                Si
                            </label>
                        </div>
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='premiado' id='no' value='no'>
                        <label class='form-check-label' for='no'>
                            No
                        </label>
                    </div>
                </fieldset>

                <fieldset class='row mb-3'>
                    <legend class='col-form-label col-sm-2 pt-0'>LIMITADO</legend>
                    <div class='col-sm-10'>
                        <div class='form-check'>
                            <input class='form-check-input' type='radio' name='limitado' id='si' value='si' checked>
                            <label class='form-check-label' for='si'>
                                Si
                            </label>
                        </div>
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='limitado' id='no' value='no'>
                        <label class='form-check-label' for='no'>
                            No
                        </label>
                    </div>
                </fieldset>

                <input type='submit' class='btn btn-primary' name='confirmar' value='CONFIRMAR'>
            </form>";

            if(isset($_POST['confirmar'])){

                if($_POST['nombre']=="" ||
                    $_POST['cantidad']=="" ||
                    $_POST['descripcion']=="" ||
                    $_POST['foto']=="" ||
                    $_POST['precio']=="" ||
                    $_POST['puntos']==""){
                        echo"
                            <div class='error'>
                                <h2>
                                    ERROR: FALTA ALGÚN DATO !!
                                </h2>
                            </div>
                            <META HTTP-EQUIV='REFRESH' CONTENT='5; URL=ad_producto.php'>
                        ";
                }else{
                    $buscar="select nombre, cantidad
                            from aceite
                            where nombre='$_POST[nombre]' and cantidad='$_POST[cantidad]'";
                    $res=$con->query($buscar);
                    $fila=$res->fetch_array(MYSQLI_ASSOC);

                    if($res->num_rows==0){

                        if($_POST['activo']=='si'){
                            $activo='s';
                        }else{
                            $activo='n';
                        }
                        
                        if($_POST['premiado']=='si'){
                            $premiado='s';
                        }else{
                            $premiado='n';
                        }

                        if($_POST['limitado']=='si'){
                            $limitado='s';
                        }else{
                            $limitado='n';
                        }

                        $partir=explode(".", $_POST['foto']);
                        $pri=$partir[0];

                        $insertar="insert into aceite
                                    values(
                                        null,
                                        '$_POST[nombre]',
                                        '$_POST[cantidad]',
                                        '$_POST[descripcion]',
                                        '$pri',
                                        '$_POST[precio]',
                                        '$_POST[puntos]',
                                        '$activo',
                                        '$premiado',
                                        '$limitado'
                                    )";
                        $ins=$con->query($insertar);

                        echo"$con->error";

                            if($ins!=null){
                                
                                echo"
                                    <div class='correcto'>
                                        <h2>
                                            ACEITE INSERTADO
                                        </h2>
                                    </div>
                                    <META HTTP-EQUIV='REFRESH' CONTENT='3; URL=ad_producto.php'>
                                ";
                            }

                    }else{
                        echo"
                            <div class='error'>
                                <h2>
                                    ERROR: ESE ACEITE YA EXISTE !!
                                </h2>
                            </div>
                            <META HTTP-EQUIV='REFRESH' CONTENT='5; URL=ad_producto.php'>
                        ";
                    }
                }

            }
        require_once("../../usuario/footer.php");
        footer_usu();
    ?>

</body>
</html>