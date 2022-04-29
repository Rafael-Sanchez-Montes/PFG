<?php

    function mostrar_productos(){

        echo"<div class='formulario_doble'>
                <div class='formulario'>
                <form action='anadir_aceite.php' method='POST'>
                        <label class='container'>
                            <h3>Añadir un nuevo aceite:</h3>
                        </label>
                        <input type='submit' class='btn btn-primary' name='anadir_aceite' value='AÑADIR ACEITE'>
                </form>
                </div>";

            echo"
                <div class='formulario'>
                <form action='anadir_maquina.php' method='POST'>
                        <label class='container'>
                            <h3>Añadir una nueva máquina:</h3>
                        </label>
                        <input type='submit' class='btn btn-primary' name='anadir_maquina' value='AÑADIR MÁQUINA'>
                </form>
                </div>
            </div>";

            echo"<div class='formulario_btn'>
            <form action='#' method='POST'>
                    <label class='container'>
                        <h3>Elige que tabla quieres ver</h3>
                    </label>
                    <br>
                    <div class='doble_btn'>
                        <input type='submit' class='btn btn-primary'    name='ver_aceite' value='MOSTRAR ACEITES'>
                        <input type='submit' class='btn btn-primary'    name='ver_maquina' value='MOSTRAR MÁQUINAS'>
                    </div>
            </form>
            </div>";

            if(!isset($_POST['ver_aceite']) && !isset($_POST['ver_maquina'])){
                echo"<p class='espacio'></p>";
            }

            if(isset($_POST['ver_aceite'])){
                require_once('ver_aceite.php');
                ver_aceite();
            }

            if(isset($_POST['ver_maquina'])){
                require_once('ver_maquina.php');
                ver_maquina();
            }
    }

?>