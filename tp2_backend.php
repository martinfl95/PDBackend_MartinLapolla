<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio N2</title>
</head>
<body>
    <?php
    $num1 = 4;
    $num2 = 6;
    echo "Número utilizado: ", $num1, "<br><hr>";
    //Ejercicio N°1
    if($num1>0){
        echo "El número ingresado es positivo <br>";
    } else {
        echo "El número ingresado es negativo <br>";
    }
    //Ejercicio N°2
    if($num1>1 && $num1<10){
        echo "El número ingresado está entre 1 y 10 <br>";
    } else {
        echo "El número ingresado está fuera del rango (1,10) <br>";
    }
    //Ejercicio N°3
    if($num1>10 || $num1<2){
        echo "El número ingresado es mayor a 10 o menor a 2 <br>";
    } else {
        echo "El número ingresado está fuera del rango x>10, x<2 <br>";
    }
    echo "<br>Números utilizados - A: ", $num1," B: ", $num2,"<br><hr>";
    //Ejercicio N°4
    if($num1>$num2){
        echo "El número ", $num1, " es mayor que el número ", $num2,"<br>";
        echo "Suma: ", $num1+$num2, "<br> Resta: ", $num1-$num2;
    } elseif ($num1<$num2) {
        echo "El número ", $num1, " es menor que el número ", $num2,"<br>";
        echo "Multiplicación: ", $num1*$num2, "<br> División: ", floor($num1/$num2), "<br> Resto: ",$num1%$num2;
    } else {
        echo "Los números ingresados son iguales";
    }
    ?>
</body>
</html>
