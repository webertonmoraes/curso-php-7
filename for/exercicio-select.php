<?php
    echo '<select>';
        for($i=1;$i<=31;$i++){
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
    echo '</select>';
    echo '<select>';
    $mes = array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
        for ($i=0;$i<12;$i++){
            echo $mes[$i].'<br>';
            echo '<option value="'.$mes[$i].'">'.$mes[$i].'</option>';
        }
    echo '</select>';
    echo '<select>';
        for ($i=date("Y"); $i>=date("Y")-100; $i--){
            echo $i;
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
    echo '</select>';
?>