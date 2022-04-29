<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../estilos/usuario/header_usu.css">
    <link rel="stylesheet" href="../../estilos/usuario/footer_usu.css">
    <link rel="stylesheet" href="../../estilos/todo.css">
    <link rel="stylesheet" href="../../estilos/usuario/info.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Información</title>
</head>
<body>
    
    <?php
        require_once("../header_sec.php");
        header_usu();
    ?>

    <div class="contenedor">
            <div class="cont_info">
                <div class="imagen_info">
                    <img src="../../imagenes/info.jpg">
                </div>
                <div class="texto_info">
                    <h2>Sobre Sierra Oliva</h2>
                    <hr>
                    <p>
                        <strong>
                            Sierra Oliva es una Cooperativa Agrícola creada en 2005, surge de la fusión de las cooperativas: S.C.A La Tiñosa y S.C.A. Virgen Del Castillo, ambas, con más de 60 años de experencia en el sector.
                        </strong>
                    </p>
                    <p>
                        Sierra Oliva lleva trabajando desde sus inicios por unos valores. Creemos que es realmente importante apostar por la máxima calidad de nuestros productos, el respeto por el agricultor, la satisfacción de nuestros clientes, el cuidado del medio ambiente y colaborar activamente con los sectores más desfavorecidos de la sociedad, estas son algunas de las acciones que nuestro equipo lleva a cabo a diario y con las que nuestra cooperativa se encuentra cada vez más identificado.
                    </p>
                </div>
            </div>

            <div class="pro_random">
                <?php
                    require_once("pro_random.php");
                    pro_random();
                ?> 
            </div>
    </div>

    <?php
        require_once("../footer.php");
        footer_usu();
    ?>

</body>
</html>

