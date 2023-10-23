<?php

$precio=$_GET["totalcompras"];

    if($precio<50){
        echo "Su gastos de envio son: 3.95";
    }elseif(($precio>=50) and ($precio<75)){
        echo "Su gastos de envio son: 2.95";
    }elseif(($precio>=75) and ($precio<100)){
        echo "Su gastos de envio son: 1.95";
    }elseif($precio>=100){
        echo "Su gastos de envio son gratuitos";
    }

?>