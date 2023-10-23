<?php

$precio=$_GET["totalcompras"];

    switch(true){

        case $precio<50 :
            printf ("Su gastos de envio son: 3.95");
            break;

        case  $precio>=50  and  $precio<75 :
            printf ("Su gastos de envio son: 2.95");
            break;

        case $precio>=75 and $precio<100:
            printf ("Su gastos de envio son: 1.95");
            break;

        case $precio>=100:
            printf ("Su gastos de envio son gratuitos");
            break;
    }

?>