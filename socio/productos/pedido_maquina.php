<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../estilos/usuario/header_usu.css">
    <link rel="stylesheet" href="../../estilos/usuario/footer_usu.css">
    <link rel="stylesheet" href="../../estilos/todo.css">
    <link rel="stylesheet" href="../../estilos/socio/comprar_pro.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    
    <?php
    
        if(isset($_POST['comprar'])){

            require_once("../../usuario/servidor.php");
            $con=conectarServidor();

            $datos="select maquina.nombre pro_nom, foto, pre_pun, socio.nombre soc_nom, apellidos, puntos
                    from maquina, socio
                    where maquina.codigo=$_POST[id] and
                            socio.id=$_SESSION[socio]";
            $res=$con->query($datos);

            $fila=$res->fetch_array(MYSQLI_ASSOC);

            $total=$_POST['cantidad'] * $fila['pre_pun'];

            echo"<div class='compra_pro'>
                    <div class='imagen'>
                        <img src='../../imagenes/productos/maquina/$fila[foto].jpg'>
                    </div>
                    <div class='info'>
                        <h2>Hola $fila[soc_nom] $fila[apellidos]</h2><br>
                        <p>Has pedido $fila[pro_nom]</p>
                        <p>La cantidad es de $_POST[cantidad] productos</p>
                        <p>Y el costo total es de $total puntos</p>
                ";

                    if($fila['puntos']>=$total){
                        $respuesta='si';
                        $perdida=$fila['puntos'] - $total;

                        echo"La compra se ha realizado, te quedan $perdida puntos <br>
                            Redirigiendo a la tienda en 5 segundos
                        <META HTTP-EQUIV='REFRESH' CONTENT='5; URL=soc_producto.php'>
                </div>";

                        $actualizar="update socio 
                                    set puntos='$perdida' 
                                    where id='$_SESSION[socio]'";
                        $res=$con->query($actualizar);

                        $hoy=date('Y-m-d');

                        $insertar="insert into pedido_maq 
                                    values(
                                            '',
                                            '$_SESSION[socio]',
                                            '$_POST[id]', 
                                            '$hoy', 
                                            '$fila[pre_pun]', 
                                            '$total',
                                            'n'
                                        )";
                        $res=$con->query($insertar);

                            echo"$con->error";

                    }else{
                        $respuesta='no';

                        echo"Puntos insuficientes, redirigiendo a la tienda en 5 segundos
                    <META HTTP-EQUIV='REFRESH' CONTENT='5; URL=soc_producto.php'>
                </div>";
                
                    }
        }
    
    ?>

</body>
</html>