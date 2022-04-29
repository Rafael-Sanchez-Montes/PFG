<?php
    function mostrar_pedidos(){

        

        echo"
            <div class='formulario_btn'>
                <form action='#' method='POST'>
                    <label class='container'>
                        <h3>Elige que tabla quieres ver</h3>
                    </label>
                    <br>
                    <div class='triple_btn'>
                        <input type='submit' class='btn btn-primary' name='ver_ped_aceite' value=' ACEITE'>
                        <input type='submit' class='btn btn-primary' name='ver_ped_carburante' value=' CARBURANTE'>
                        <input type='submit' class='btn btn-primary' name='ver_ped_maquina' value=' MÁQUINA'>
                    </div>
                </form>
            </div>
        ";

        if(!isset($_POST['ver_ped_aceite']) && 
            !isset($_POST['ver_ped_carburante']) &&
            !isset($_POST['ver_ped_maquina'])){
            echo"<p class='espacio'></p>";
        }



        if(isset($_POST['ver_ped_aceite']) || $_SESSION['pro']=='aceite'){

            $_SESSION['pro']='aceite';

            require_once('ver_ped_aceite.php');
            ver_ped_aceite();
            
            require_once('ori_ped_aceite.php');
            ori_ped_aceite();
            echo"<p class='espacio'></p>";
        }

        if(isset($_POST['ver_ped_carburante']) || $_SESSION['pro']=='carburante'){

            $_SESSION['pro']='carburante';

            require_once('ver_ped_carburante.php');
            ver_ped_carburante();
            
            require_once('ori_ped_carburante.php');
            ori_ped_carburante();
            echo"<p class='espacio'></p>";
            
        }

        if(isset($_POST['ver_ped_maquina']) || $_SESSION['pro']=='maquina'){

            $_SESSION['pro']='maquina';

            require_once('ver_ped_maquina.php');
            ver_ped_maquina();
            
            require_once('ori_ped_maquina.php');
            ori_ped_maquina();
            echo"<p class='espacio'></p>";
        }
    }
?>