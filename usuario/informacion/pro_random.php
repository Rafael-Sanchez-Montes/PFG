<?php
    function pro_random(){

        require_once("../servidor.php");
        $con=conectarServidor();

        $datos="select count(codigo) codigo
                from aceite
                where activo='s'";
        $res=$con->query($datos);
        $fila=$res->fetch_array(MYSQLI_ASSOC);
        $valor="$fila[codigo]";
        
        $num_random=rand(1,$valor);

        $pro1="select codigo
                from aceite
                where codigo=$num_random";
        $res=$con->query($pro1);
        $fila=$res->fetch_array(MYSQLI_ASSOC);
        $p1="$fila[codigo]";
        

        $pro2="select codigo
                from aceite
                where codigo<>$p1";
        $res=$con->query($pro2);
        $fila=$res->fetch_array(MYSQLI_ASSOC);
        $p2="$fila[codigo]";
        

        $pro3="select codigo
                from aceite
                where codigo<>$p1 and
                    codigo<>$p2";
        $res=$con->query($pro3);
        $fila=$res->fetch_array(MYSQLI_ASSOC);
            $p3="$fila[codigo]";
        
        $con->close();


        echo"
            <style>
                .img_ran{
                    display: flex;
                    justify-content: space-around;
                    width: 100%;
                    height:200px;
                }            

                .img_ran img{
                    width:23%;
                    height:350px;
                }
            </style>

            <div class='img_ran'>
                <img src='../../imagenes/productos/aceite/producto$p1.jpg'>
                <img src='../../imagenes/productos/aceite/producto$p2.jpg'>
                <img src='../../imagenes/productos/aceite/producto$p3.jpg'>
            </div>
        ";


    }
?>

