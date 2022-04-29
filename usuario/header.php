<?php
    function header_usu(){
        echo "
            <header id='menu'>
                <div class='imagen'>
                    <a href='#'>
                        <img src='imagenes/icono.png'>
                    </a>
                </div>   

                <div class='enlace'>
                    <a href='#'>INICIO</a>
                </div>
                <div class='enlace'>
                    <a href='usuario/informacion/info.php'>INFORMACIÓN</a>
                </div>
                <div class='enlace'>
                    <a href='usuario/premios/premios.php'>PREMIOS</a>
                </div>
                <div class='enlace'>
                    <a href='usuario/productos/producto.php'>PRODUCTOS</a>
                </div>
                <div class='enlace'>
                    <a href='usuario/acceso/acceso.php'>ACCESO SOCIOS</a>
                </div>
            </header>    
        ";
    }
?>