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

    <link rel="stylesheet" href="../../estilos/admi/res_premio.css">

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

            $partir=explode(".", $_POST['foto']);
                    $pri=$partir[0];
            
            $cambio="update maquina set
                        nombre='$_POST[nombre]',
                        descripcion='$_POST[descripcion]',
                        foto='$pri',
                        pre_pun='$_POST[pre_pun]',
                        activo='$activo',
                        confirmado='n'
                    where codigo='$_POST[id]'
                ";
            $cam=$con->query($cambio);

            if($cam!=null){
                
                echo"
                    <div class='correcto'>
                        <h2>
                            MAQUINA EDITADO
                        </h2>
                    </div>
                    <META HTTP-EQUIV='REFRESH' CONTENT='3; URL=ad_producto.php'>
                ";
            }else{
                echo"
                    <div class='error'>
                        <h2>
                            ERROR: EL MAQUINA NO SE HA MODIFICADO !!
                        </h2>
                        <p>$con->error</p>
                    </div>
                    <META HTTP-EQUIV='REFRESH' CONTENT='3; URL=ad_producto.php'>
                ";
            }
        }
    ?>

</body>
</html>