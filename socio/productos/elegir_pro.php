<?php
    function elegir_pro(){

        echo"
            <div class='container'>
                <div class='titulo'>
                    <h1>
                        Elige nuestros productos
                    </h1>
                </div>
                <div class='elegir'>
                    <form action=# method='POST'>
                        <input type='submit' id='aceite' name='aceite' value=''>
                        <input type='submit' id='maquina' name='maquina' value=''>
                        <input type='submit' id='carburante' name='carburante' value=''>
                    </form>
                </div>
            </div>
        ";

        if(isset($_POST['aceite'])){
            require_once("mostrar_aceite.php");
            mostrar_aceite();
        }

        if(isset($_POST['maquina'])){
            require_once("mostrar_maquina.php");
            mostrar_maquina();
        }

        if(isset($_POST['carburante'])){
            require_once("mostrar_carburante.php");
            mostrar_carburante();
        }
        
    }
?>