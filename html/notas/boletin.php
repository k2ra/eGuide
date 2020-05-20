

    <div class="panel">
        <header class="panel-heading">
            <h3 class="panel-title">Boletin</h3>
        </header>
        <div class="panel-body">
        <?php /* print_r($resp['materias']);
        print_r($resp['calificaciones']); */
        //print_r($resp['calificaciones']);
        ?>
            <table class="tablesaw table-striped" data-tablesaw-mode="swipe" data-tablesaw-mode-switch
                data-tablesaw-minimap>
                <thead>
                <tr>
                    <th data-tablesaw-priority="3">Materia</th>
                    <th data-tablesaw-priority="persist">I Periodo</th>
                    <th data-tablesaw-priority="2">II Periodo</th>
                    <th data-tablesaw-priority="1">III Periodo</th>
                    <th data-tablesaw-priority="4">Promedio</th>
                </tr>
                </thead>
              
                <tbody>
                <?php 
                //SELECT (SELECT SUM(calificacion)/count(1) FROM tbl_calificaciones where fecha_calificacion BETWEEN fecha_inicial AND fecha_final)FROM tbl_periodos
                //SELECT fk_materia, fk_periodo, sum(calificacion)/count(*) FROM `tbl_calificaciones` WHERE fk_estudianteId=3 group by fk_periodo,fk_materia
                $test="";
                    foreach ($resp['materias'] as $key => $value) {
                        $prom=0.0; $p1 =0.0;$p2 =0.0;$p3 =0.0; $cant=1;
                        $test .=
                            '<tr>
                                <th><a href="javascript:void(0)" data-rel="external">'.$value["descripcion"].'</a></th>
                            ';
                        
                        foreach ($resp['calificaciones'] as $key2 => $value2) {
                           // echo "key ". ($key2 +1) ." periodo".$value2['fk_periodo']." promedio ".$value2['promedio']. " fk_mat ".$value2['fk_materia']." cod_mat ". $value['cod_materia'];
                        
                            if ($value2['fk_materia'] == $value['cod_materia'])
                            {
                                 
                                if($value2['fk_periodo']== 1 ){
                                    $cant +=1;
                                    $p1=$value2['promedio'] ;
                                }//else{$p1=0.0;}
                                if($value2['fk_periodo']== 2 ){
                                    $cant +=1;
                                    $p2=$value2['promedio'] ;
                                }//else{$p2=0.0;}
                                if($value2['fk_periodo']== 3 ){
                                    $cant +=1;
                                    $p3=$value2['promedio'] ;
                                }//else{$p3=0.0;}
                                
                            }
                        }
                        $test .='<td>'.$p1.'</td><td>'.$p2.'</td><td>'.$p3.'</td><td>'.$prom = ($p1+$p2+$p3)/($cant>1?$cant-1:$cant) .'</td></tr>';
                                
                          

                        
                 /*        print_r(
                            '<tr>
                                <th><a href="javascript:void(0)" data-rel="external">'.$value["descripcion"].'</a></th>
                                
                                
                                <td>0.0</td>
                                <td>0.0</td>
                                <td>0.0</td>
                                <td>0.0</td>
                            </tr>'
                            ); */
                    }
                    echo $test ;
                
                ?>
                </tbody>
            </table>
        </div>
    </div>    
