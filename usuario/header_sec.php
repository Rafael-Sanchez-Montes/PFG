<?php
    function header_usu(){
            echo "
                <header id='menu'>
                    <div class='imagen'>
                        <a href='../../index.php'>
                            <img src='../../imagenes/icono.png'>
                        </a>
                    </div>   

                    <div class='enlace'>
                        <a href='../../index.php'>INICIO</a>
                    </div>
                    <div class='enlace'>
                        <a href='../informacion/info.php'>INFORMACIÓN</a>
                    </div>
                    <div class='enlace'>
                        <a href='../premios/premios.php'>PREMIOS</a>
                    </div>
                    <div class='enlace'>
                        <a href='../productos/producto.php'>PRODUCTOS</a>
                    </div>
                    <div class='enlace'>
                        <a href='../acceso/acceso.php'>ACCESO SOCIOS</a>
                    </div>
                </header>    
            ";
    }
?>