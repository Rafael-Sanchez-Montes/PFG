<?php
    function header_socio_sec(){
        echo "
            <header id='menu'>
                <div class='imagen'>
                    <a href='#'>
                        <img src='../imagenes/icono.png'>
                    </a>
                </div>   

                <div class='enlace'>
                    <a href='almazara/soc_almazara.php'>ALMAZARA</a>
                </div>
                <div class='enlace'>
                    <a href='perfil/soc_perfil.php'>PERFIL</a>
                </div>
                <div class='enlace'>
                    <a href='productos/soc_producto.php'>PRODUCTOS</a>
                </div>
                <div class='enlace'>
                    <a href='puntos/soc_punto.php'>PUNTOS</a>
                </div>
                
                <div class='enlace'>
                    <a href='../usuario/cerrar_sesion.php'>CERRAR SESIÓN</a>
                </div>
            </header>    
        ";
    }
?>