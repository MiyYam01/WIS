<?php
    define("MINSIZE", 50);
    echo MINSIZE;
    echo constant("MINSIZE");
?>

<html>
<head><title>Arithmetical Operators</title><head>
<body>
<?php
 $a = 42;
 $b = 20;
 
 $c = $a + $b;
 echo "<br>Addition Operation Result: $c <br/>";
 $c = $a - $b;
 echo "Subtraction Operation Result: $c <br/>";
 $c = $a * $b;
 echo "Multiplication Operation Result: $c <br/>";
 $c = $a / $b;
 echo "Division Operation Result: $c <br/>";
 $c = $a % $b;
 echo "Modulus Operation Result: $c <br/>";
 $c = $a++;
 echo "Increment Operation Result: $c <br/>";
 $c = $a--;
 echo "Decrement Operation Result: $c <br/>";
?>
</body>
</html>