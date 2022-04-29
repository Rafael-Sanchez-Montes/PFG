<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(isset($_POST['confirmar'])){
            require_once("../../usuario/servidor.php");
            $con=conectarServidor();

            $revisar="update pedido_car
                        set confirmado='s'
                        where codigo=$_POST[cod]";
            $res=$con->query($revisar);


            echo"<META HTTP-EQUIV='REFRESH' CONTENT='0; URL=ad_pedido.php'>";
        }

    ?>

</body>
</html>