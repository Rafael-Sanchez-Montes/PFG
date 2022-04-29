<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comprar producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../estilos/usuario/header_usu.css">
    <link rel="stylesheet" href="../../estilos/usuario/footer_usu.css">
    <link rel="stylesheet" href="../../estilos/todo.css">
    <link rel="stylesheet" href="../../estilos/usuario/info_pro.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    
    <?php

        if(isset($_POST['informacion'])){

            require_once("../header_sec.php");
            header_usu();

            require_once("../../usuario/servidor.php");
            $con=conectarServidor();
            
            $cod=$_POST['codigo'];

            $datos="select foto ,nombre, precio, cantidad, descripcion
                    from aceite
                    where codigo=$cod";
            $res=$con->query($datos);

            $fila=$res->fetch_array(MYSQLI_ASSOC);

            echo"

                <div class='info_pro'>
                    <div class='imagen'>
                        <img src='../../imagenes/productos/aceite/$fila[foto].jpg'>
                    </div>
                    <div class='info'>
                        <p>
                            <strong>$fila[nombre]</strong> 
                        </p>

                        <p>
                            <strong>$fila[precio]€/ud</strong> 
                        </p>

                        <p>
                            <strong>$fila[cantidad]/ud</strong> 
                        </p>

                        <p>
                            <strong>DESCRIPCIÓN DEL PRODUCTO:</strong> $fila[descripcion]
                        </p>

                        <br>

                        <p>
                            <a href='producto.php' class='btn btn-primary'>VOLVER</a>
                        </p>
                    </div>
                </div>

            ";
            $con->close();
        }

        require_once("../footer.php");
        footer_usu();
    ?>

</body>
</html>

