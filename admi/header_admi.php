<?php
    function header_admi(){
        echo "
            <header id='menu'>
                <div class='imagen'>
                    <a href='#'>
                        <img src='../imagenes/icono.png'>
                    </a>
                </div>   

                <div class='enlace'>
                    <a href='../admi/socios/ad_socio.php'>SOCIOS</a>
                </div>
                <div class='enlace'>
                    <a href='../admi/premios/ad_premio.php'>PREMIOS</a>
                </div>
                <div class='enlace'>
                    <a href='../admi/productos/ad_producto.php'>PRODUCTOS</a>
                </div>
                <div class='enlace'>
                    <a href='../admi/pedidos/ad_pedido.php'>PEDIDOS</a>
                </div>
                <div class='enlace'>
                    <a href='../usuario/cerrar_sesion.php'>CERRAR SESIÓN</a>
                </div>
            </header>    
        ";
    }
?>