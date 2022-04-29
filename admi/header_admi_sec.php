<?php
    function header_admi_sec(){
        echo "
            <header id='menu'>
                <div class='imagen'>
                    <a href='../inicio_ad.php'>
                        <img src='../../imagenes/icono.png'>
                    </a>
                </div>  

                <div class='enlace'>
                    <a href='../socios/ad_socio.php'>SOCIOS</a>
                </div>
                <div class='enlace'>
                    <a href='../premios/ad_premio.php'>PREMIOS</a>
                </div>
                <div class='enlace'>
                    <a href='../productos/ad_producto.php'>PRODUCTOS</a>
                </div>
                <div class='enlace'>
                    <a href='../pedidos/ad_pedido.php'>PEDIDOS</a>
                </div>
                <div class='enlace'>
                    <a href='../../usuario/cerrar_sesion.php'>CERRAR SESIÓN</a>
                </div>
            </header>    
        ";
    }
?>