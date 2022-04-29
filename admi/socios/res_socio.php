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

    <link rel="stylesheet" href="../../estilos/admi/res_socio.css">

    <title>resultado editar</title>
</head>
<body>
    
    <?php

        require_once('../../usuario/servidor.php');
        $con=conectarServidor();

        if(isset($_POST['edit'])){

            if($_POST['activo']=='si'){
                $activo='s';
            }else{
                $activo='n';
            }
            
            $cambio="update socio set
                        dni='$_POST[dni]',
                        nombre='$_POST[nombre]',
                        apellidos='$_POST[apellidos]',
                        telefono='$_POST[telefono]',
                        puntos='$_POST[puntos]',
                        nombre_soc='$_POST[nombre_soc]',
                        contrasena='$_POST[contrasena]',
                        activo='$activo'
                    where id='$_POST[id]'
                ";
            $cam=$con->query($cambio);

            if($cam!=null){
                
                echo"
                    <div class='correcto'>
                        <h2>
                            SOCIO EDITADO
                        </h2>
                    </div>
                    <META HTTP-EQUIV='REFRESH' CONTENT='3; URL=ad_socio.php'>
                ";
            }else{
                echo"
                    <div class='error'>
                        <h2>
                            ERROR: EL SOCIO NO SE HA MODIFICADO !!
                        </h2>
                        <p>$con->error</p>
                    </div>
                    <META HTTP-EQUIV='REFRESH' CONTENT='3; URL=ad_socio.php'>
                ";
            }
        }
    ?>

</body>
</html>