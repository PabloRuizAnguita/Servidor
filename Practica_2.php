<!DOCTYPE html>
<html>
<head>
    <?php

    echo "<h2>Actividad 1</h2>";

    $var="Hola";
    $var2="Mundo";
    $concatenacion=$var." ".$var2;
    echo $concatenacion;
    echo "<br>";

    $boolean=True;
    echo $boolean;
    echo "<br>";

    $float=3.14;
    echo $float;
    echo "<br>";

    $array=array("valor1"=> "1","valor2"=> "2","valor3"=> "3");
    print_r($array);
    echo "<br>";



    echo "<h2>Actividad 2</h2>";

    $boolean=False;
    echo $boolean;
    echo "No sucede nada ya que el boolean en false no se imprime por pantalla.";
    echo "<br>";
    


    echo "<h2>Actividad 3</h2>";

    $concatenacion=str_replace(" ","",$concatenacion);
    echo $concatenacion;
    echo "<br>";



    echo "<h2>Actividad 4</h2>";

    echo "El operador \"+\" sirve para sumar el valor de variables. Con la \"/\" podemos
    dividir valores entre variables. El símbolo del dólar \"$\" indica que estamos
    utilizando variables pero no lo usaremos en las constantes o globales.";
    echo "<br>";



    echo "<h2>Actividad 5</h2>";

    $varTexto="El operador \"+\" sirve para sumar el valor de variables. Con la \"/\" podemos
    dividir valores entre variables. El símbolo del dólar \"$\" indica que estamos
    utilizando variables pero no lo usaremos en las constantes o globales.";
    $longitud=strlen($varTexto);
    echo "El texto cuenta con ".$longitud." caracteres.";
    echo "<br>";



    echo "<h2>Actividad 6</h2>";

    $varFrase="Hello"." "."World";
    $ArrayVoc = array('A', 'E', 'I', 'O', 'U','a', 'e', 'i', 'o', 'u');
    $reemplazo=str_replace($ArrayVoc,"",$varFrase);
    echo $reemplazo;



    echo "<h2>Actividad 7</h2>";

    $varFuncion=null;
    $longitud1=strlen($varFuncion);
    if($varFuncion===null){
        echo "La función está vacía";
    }elseif($longitud1>0){
        echo "La Función no está vacía";
    }
    echo "<br>";


    echo "<h2>Actividad 8</h2>";

    $varFrase=intval($varFrase);
    echo $varFrase;
    echo "<br>";
    echo "Sale 0 porque es imposible convertir un String en un Integer.";



    echo "<h2>Actividad 9</h2>";

    $varCuadrada=sqrt(144);
    echo "La raíz cuadrada de 144 es: ".$varCuadrada;
    echo "<br>";
    $varPotencia=pow(2,8);
    echo "El resultado de 2 elevado a 8 es: $varPotencia";
    echo "<br>";
    $varResto=100%6;
    echo "El resto de 100/6 es: $varResto";
    echo "<br>";
    function MCD($num1,$num2){
        if($num1==0){
            return $num2;
        }
        return MCD($num2%$num1,$num1);
    }
    echo "El MCD de 3 y 6 es: ".MCD(3,6);
     ?>
</head>
</html>
