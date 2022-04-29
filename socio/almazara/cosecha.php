<?php
    function cosecha(){

        require_once('../../usuario/servidor.php');
        $con=conectarServidor();

        $f_max="select max(fecha) fec_max
                from cosecha
                where id_socio='$_SESSION[socio]'";
        $res=$con->query($f_max);
        $fila_max=$res->fetch_array(MYSQLI_ASSOC);

        $fec_max=$fila_max['fec_max'];
        $año1=explode("-", $fec_max);
        $ano_max= $año1[0];

        $f_min="select min(fecha) fec_min
                from cosecha
                where id_socio='$_SESSION[socio]'";
        $res=$con->query($f_min);
        $fila_min=$res->fetch_array(MYSQLI_ASSOC);

        $fec_min=$fila_min['fec_min'];
        $año2=explode("-", $fec_min);
        $ano_min= $año2[0];

        $menos_uno=$ano_min - 1;

        echo"<div class='formulario'>
                <form action='#' method='POST'>
                    <div class='mb-3'>
                        <label for='ano' class='form-label'>Seleccione una campaña</label>";

                    echo"<select class='form-select' name='ano' id='ano'>";
                        echo"<option value=0 selected></option>";
                    for($i=$ano_max; $i>=$ano_min; $i--){
                        $segundo=$i+1;
                        echo"<option value='$i'>$i - $segundo</option>";
                    }
                    
                    echo"   <option value='$menos_uno'>$menos_uno - $ano_min</option>
                        </select>
                    </div>";

                    echo"<input type='submit' class='btn btn-primary' name='enviar' value='ENVIAR'>
                </form>
            </div>";

                if (isset($_POST['enviar'])){

                    $ano=$_POST['ano'];
                    $sig_ano=$_POST['ano'] + 1;

                    if($ano==0){
                        echo"
                            <div class='bloque'>
                                <div class='aviso'>
                                    Seleccione una campaña valida
                                </div>
                            </div>
                        ";
                    }else{
                        $datos="select count(codigo) count_cod, 
                                    sum(kilos) sum_kilos
                            from cosecha
                            where id_socio=$_SESSION[socio] and
                                    fecha between '$ano-10-01' and
                                    '$sig_ano-05-31'";
                    $res=$con->query($datos);
                    $fila=$res->fetch_array(MYSQLI_ASSOC);

                echo"<div class='resumen'>
                        <h2>
                            RESUMEN DE LA CAMPAÑA $ano - $sig_ano
                        </h2>
                        <hr>
                        <div class='cuadro'>
                            <h3>
                                Fechas que abarca la campaña: desde el 01-10-$ano hasta el 31-05-$sig_ano <br>
                                Total de vales: $fila[count_cod] <br>
                                Total de kilos en la campaña: $fila[sum_kilos]kg
                            </h3>
                        </div>
                    </div>";

                    $tabla="select descripcion, tolva, termino, kilos, fecha
                            from cosecha, tipo
                            where tipo.codigo = cosecha.tipo and
                                    id_socio=$_SESSION[socio] and
                                    fecha between '$ano-10-01' and
                                    '$sig_ano-05-31'";
                    $res=$con->query($tabla);

                    echo"
                        <table class='table table-striped table-hover'>
                            <thead>
                                <tr>
                                    <th scope='col'>#</th>
                                    <th scope='col'>TIPO</th>
                                    <th scope='col'>Nº TOLVA</th>
                                    <th scope='col'>TERMINO</th>
                                    <th scope='col'>KILOS</th>
                                    <th scope='col'>FECHA</th>
                                </tr>
                            </thead>
                            <tbody>";
                            $contador=0;
                            while($fila=$res->fetch_array(MYSQLI_ASSOC)){
                                $contador++;
                                echo"<tr>
                                        <th scope='row'>$contador</th>
                                        <td>$fila[descripcion]</td>
                                        <td>$fila[tolva]</td>
                                        <td>$fila[termino]</td>
                                        <td>$fila[kilos]</td>";

                                        $partir=explode("-", $fila['fecha']);
                                        $pri=$partir[0];
                                        $seg=$partir[1];
                                        $ter=$partir[2];

                                    echo"<td>$ter-$seg-$pri</td>
                                    </tr>";
                            }
                    echo"   </tbody>
                        </table>";
                    }

                }else{

                    $ano=date('Y');
                    $sig_ano=$ano+1;
                    
                    $datos="select count(codigo) count_cod, 
                                    sum(kilos) sum_kilos
                            from cosecha
                            where id_socio=$_SESSION[socio] and
                                    fecha between '$ano-10-01' and
                                    '$sig_ano-05-31'";
                    $res=$con->query($datos);
                    $fila=$res->fetch_array(MYSQLI_ASSOC);

                echo"<div class='resumen'>
                        <h2>
                            RESUMEN DE LA CAMPAÑA $ano - $sig_ano
                        </h2>
                        <hr>
                        <div class='cuadro'>
                            <h3>
                                Fechas que abarca la campaña: desde el 01-10-$ano hasta el 31-05-$sig_ano <br>
                                Total de vales: $fila[count_cod] <br>
                                Total de kilos en la campaña: $fila[sum_kilos]kg
                            </h3>
                        </div>
                    </div>";

                    $tabla="select descripcion, tolva, termino, kilos, fecha
                            from cosecha, tipo
                            where tipo.codigo = cosecha.tipo and
                                    id_socio=$_SESSION[socio] and
                                    fecha between '$ano-10-01' and
                                    '$sig_ano-05-31'";
                    $res=$con->query($tabla);

                    echo"
                        <table class='table table-striped table-hover'>
                            <thead>
                                <tr>
                                    <th scope='col'>#</th>
                                    <th scope='col'>TIPO</th>
                                    <th scope='col'>Nº TOLVA</th>
                                    <th scope='col'>TERMINO</th>
                                    <th scope='col'>KILOS</th>
                                    <th scope='col'>FECHA</th>
                                </tr>
                            </thead>
                            <tbody>";
                            $contador=0;
                            while($fila=$res->fetch_array(MYSQLI_ASSOC)){
                                $contador++;
                                echo"<tr>
                                        <th scope='row'>$contador</th>
                                        <td>$fila[descripcion]</td>
                                        <td>$fila[tolva]</td>
                                        <td>$fila[termino]</td>
                                        <td>$fila[kilos]</td>";

                                        $partir=explode("-", $fila['fecha']);
                                        $pri=$partir[0];
                                        $seg=$partir[1];
                                        $ter=$partir[2];

                                    echo"<td>$ter-$seg-$pri</td>
                                    </tr>";
                            }
                    echo"   </tbody>
                        </table>";
                }

    }
?>