<!DOCTYPE html>
<html>
<head>
    <?php
  $var1= "4545";
  echo $var1."4";

  $var2=5;
  $var1= &$var2;// & clonacion constante
  echo $var1;
  $var2=3;
  echo $var1;

  $var4= array("1", "2");
  $var5=$var4[1];
  echo $var5;

  define("PI",3.14);
  $radio=6;
  $volumen = (4/3)*PI*(pow($radio,3));
  echo "<br>";
  echo $volumen;



    ?>
</head>
</html>
