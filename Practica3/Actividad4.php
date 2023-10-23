<?php
$a = array(
    "uno" => 3,
    "dos" => 1,
    "tres" => 2,
    "cuatro" => 0);

    

foreach ($a as $k => $v) {
    if($k=='uno'){
        echo '(' . $a['uno'] . ',' . $a['dos'] .')' . 
        '<br>' 
        . '(' . $a['tres'] . ',' . $a['cuatro'] .')';
    }
}



?>