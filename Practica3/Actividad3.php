<?php

$n1=$_GET['numero1'];
$n2=$_GET['numero2'];
$n3=$_GET['numero3'];
$n4=$_GET['numero4'];
$n5=$_GET['numero5'];

$array12345=array($n1,$n2,$n3,$n4,$n5);
$arraylong=count($array12345);
$elegido=0;

for($i=0; $i<$arraylong; $i++){
    if($elegido<$array12345[$i]){
        $elegido=$array12345[$i];
    }
} echo $elegido;

?>  