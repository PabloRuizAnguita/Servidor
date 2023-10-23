<?php
$a1 = array(
    "uno" => 1,
    "dos" => 0,
    "tres" => 0,
    "cuatro" => 1,
    "cinco" => 0,
    "seis" => 1,
    "siete" => 1,
    "ocho" => 0);
    

    foreach ($a1 as $k => $v) {
        if($k=="uno" || $k=="cinco"){
            $operacion1= ($a1["uno"] + $a1["cinco"]);
            $operacion2= ($a1["dos"] + $a1["seis"]);
            $operacion3= ($a1["tres"] + $a1["siete"]);
            $operacion4= ($a1["cuatro"] + $a1["ocho"]);
            
        }
    }echo '('. $operacion1. ',' .$operacion2. ') <br>'. '(' .$operacion3. ',' .$operacion4. ')';
    
?>