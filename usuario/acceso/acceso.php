<?php
    session_start();
?>

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
    <link rel="stylesheet" href="../../estilos/todo.css">
    <link rel="stylesheet" href="../../estilos/usuario/acceso.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>acceso</title>
</head>

<body>
    <?php
        require_once("../header_sec.php");
        header_usu();
    ?>

    <div class="container">
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de socio</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena">
            </div>
            <input type="submit" class="btn btn-primary" name="enviar" value="INICIAR SESIÓN">
        </form>
    

    <?php

        if(isset($_POST['enviar'])){
            if(strlen($_POST['nombre'])!=0 &&
                strlen($_POST['contrasena'])!=0){

                    $nom=$_POST['nombre'];
                    $contra=$_POST['contrasena'];
                    $activo='s';
                    
                    require_once('../servidor.php');
                    $con=conectarServidor();

                    $sentencia="select id, nombre_soc, contrasena
                                from socio
                                where nombre_soc=? and
                                contrasena=? and
                                activo=?";
                    $consulta=$con->prepare($sentencia);

                    $consulta->bind_param("sss", $nom, $contra, $activo);
                    $consulta->bind_result($id, $nombre_soc, $contrasena);
                    $consulta->execute();
                    
                    $consulta->fetch();
                    
                    if($id>=0){
                        $_SESSION['socio']=$id;

                        if($_SESSION['socio']==0 &&
                            $nombre_soc=='admin' &&
                            $contrasena=='admin'){
                            echo "<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=../../admi/inicio_ad.php'>";
                        }else if($_SESSION['socio']>0){
                            echo "<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=../../socio/inicio_soc.php'>";
                        }else{
                            echo "  <div class='error'>
                                        <h2>
                                            El nombre de socio o la contraseña son incorrectos
                                        </h2>
                                    </div>
                                    <META HTTP-EQUIV='REFRESH' CONTENT='3; URL=#'>";
                        }
                    }
                    $con->close();
            }
        }
        echo"</div>";
        require_once("../footer.php");
        footer_usu();

    ?>
</body>

</html>