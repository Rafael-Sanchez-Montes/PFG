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
    <link rel="stylesheet" href="../../estilos/usuario/foto_premio.css">
    <link rel="stylesheet" href="../../estilos/usuario/premios.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>premios</title>
</head>
<body>
    
    <?php
        require_once("../header_sec.php");
        header_usu();

        require_once("mos_premios.php");
        mos_premios();
    ?>
        <div class="certificado">
            <h2>
                Nuestras Certificaciones
            </h2>
            <p>
                <strong>Un producto es de calidad</strong> cuando además de ser bueno, te hace disfrutar. Por eso disponemos de certificados que avalan cada uno de nuestros productos con la calidad que merecen nuestros clientes.
            </p>
            <img src="../../imagenes/premios/logo_caae.png">
        </div>
    <?php
        require_once("../footer.php");
        footer_usu();
    ?>

</body>
</html>