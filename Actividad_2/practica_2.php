<?php
    // Actividad 1
    echo "<h1>Actividad 1</h1>";
    echo "<hr>";


    // 1,a
    echo "<h2>Actividad 1 : a</h2>";
    $palabra1 = "Hola";
    $palabra2 = "Mundo";
    $concatenar = $palabra1 . " " . $palabra2;
    echo $concatenar;
    echo "<br>";
    echo"<hr>";


    // 1,b
    echo "<h2>Actividad 1 : b</h2>";
    $buleano = true;
    echo $buleano;
    echo "<br>";
    echo"<hr>";


    // 1,c
    echo "<h2>Actividad 1 : c</h2>";
    $numFloat = 3.14;
    echo $numFloat;
    echo "<br>";
    echo"<hr>";


    // 1,d
    echo "<h2>Actividad 1 : d</h2>";
    $varArray = array(
        "valor1" => 1,
        "valor2" => 2,
        "valor3" => 3);
    print_r($varArray);
    echo "<br>";
    echo"<hr>";


    // Actividad 2
    echo "<h1>Actividad 2</h1>";
    $buleano = false;
    echo $buleano;
    echo "Esto para porque cuando una variable boolean = false no aparecenada";
    echo "<br>";
    echo"<hr>";


    // Actividad 3
    echo "<h1>Actividad 3</h1>";
    $concatenar = str_replace(" ", "", $concatenar);
    echo $concatenar;
    echo "<br>";
    echo"<hr>";


    // Actividad 4
    echo "<h1>Actividad 4</h1>";
    echo "El operador '+' sirve para sumar el valor de variables. Con la '/'podemos dividir valores entre variables. 
    El símbolo del dólar '$' indica que estamos utilizando variables pero no lo usaremos en las constantes o globales";
    echo "<br>";
    echo"<hr>";


    // Actividad 5
    echo "<h1>Actividad 5</h1>";
    $texto = "El operador '+' sirve para sumar el valor de variables. Con la '/'podemos dividir valores entre variables. 
    El símbolo del dólar '$' indica que estamos utilizando variables pero no lo usaremos en las constantes o globales";
    $longitud = strlen($texto);
    echo "La longitud del texto es: " . $longitud;
    echo "<br>";
    echo"<hr>";


    // Actividad 6
    echo "<h1>Actividad 6</h1>";
    $palabra = "Hello World";
    $vocales = array("a", "e", "i", "o", "u");
    $borrarVocales = str_replace($vocales, "", $palabra);
    echo $borrarVocales;
    echo "<br>";
    echo"<hr>";


    // Actividad 7
    echo "<h1>Actividad 7</h1>";
    $variableVacia = null;
    $comprovacion = is_null($variableVacia);
    echo $comprovacion;
    echo "Muestra 1 porque la variable esta vacía, si no lo estuviera mostraría 0";
    echo "<br>";
    echo "<hr>";


    // Actividad 8
    echo "<h1>Actividad 8</h1>";
    $palabra2 = intval($palabra);
    echo $palabra2 . " No se muestra nada ya que no es posible pasar de variable string a variable int.";
    echo "<br>";
    echo "<hr>";


    // Actividad 9
    echo "<h1>Actividad 9</h1>";
    echo "<hr>";

    // 9,a
    echo "<h2>Actividad 9 : a</h2>";
    $num1 = 144;
    $raiz = sqrt($num1);
    echo "La raíz cuadrada de $num1 es : $raiz";
    echo "<br>";
    echo "<hr>";


    // 9,b
    echo "<h2>Actividad 9 : b</h2>";
    $base = 2;
    $exponente = 8;
    $resul = pow($base, $exponente);
    echo "$base elevado a $exponente = $resul";
    echo "<br>";
    echo "<hr>";


    // 9,c
    echo "<h2>Actividad 9 : c</h2>";
    $numer1 = 100;
    $numer2 = 6;
    $resto = $numer1 % $numer2 ;
    echo "Resto de dividir $numer1 entre $numer2 = $resto";
    echo "<br>";
    echo "<hr>";


    // 9,d
    echo "<h2>Actividad 9 : d</h2>";
    function MCD($num1, $num2) {
        if ($num1 == 0) {
			return $num2;
		}
		return MCD($num2%$num1, $num1);
    }
    echo "El máximo común divisor de 3 y 6 es: ". MCD(3,6);;
?>