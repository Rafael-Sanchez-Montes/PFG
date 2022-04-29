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

    <link rel="stylesheet" href="../../estilos/admi/editar_aceite.css">

    <title>editar socio</title>
</head>
<body>
    
    <?php
        require_once('../../usuario/servidor.php');
        $con=conectarServidor();

        if(isset($_POST['editar'])){

            $datos="select *
                    from maquina
                    where codigo=$_POST[id]";
            $res=$con->query($datos);
            $fila=$res->fetch_array(MYSQLI_ASSOC);

        echo"<form action='res_maquina.php' method='POST' class='form_editar'>
                <div class='row mb-3'>
                    <label for='nombre' class='col-sm-2 col-form-label'>
                        NOMBRE:
                    </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' name='nombre' id='nombre' value='$fila[nombre]'>
                    </div>
                </div>

                <div class='row mb-3'>
                    <label for='descripcion' class='col-sm-2 col-form-label'>
                        DESCRIPCIÓN:
                    </label>
                    <div class='col-sm-10'>
                        <textarea class='form-control' name='descripcion' id='descripcion' rows='10' cols='50'>$fila[descripcion]</textarea>
                    </div>
                </div>

                <div class='row mb-3'>
                    <label for='foto' class='col-sm-2 col-form-label'>
                        FOTO:
                    </label>
                    <div class='col-sm-10'>
                        <input type='file' class='form-control' name='foto' id='foto' value='$fila[foto]' accept='image/jpeg'>
                    </div>
                </div>

                <div class='row mb-3'>
                    <label for='pre_pun' class='col-sm-2 col-form-label'>
                        puntos:
                    </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' name='pre_pun' id='pre_pun' value='$fila[pre_pun]'>
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

                <input type='hidden' name='id' value='$_POST[id]'>
                <input type='submit' class='btn btn-primary' name='edit' value='EDITAR'><br>
                <a href='ad_producto.php' class='btn btn-danger'>VOLVER</a>
            </form>";

        }

    ?>

</body>
</html>