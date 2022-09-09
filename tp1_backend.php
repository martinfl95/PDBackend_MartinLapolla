<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico N1</title>
</head>
<body>
    <?php
    //Ejercicio N°1
    $saludo = "Hola Mundo";
    echo $saludo;
    ?>
    <br><hr>
    <?php
    //Ejercicio N°2
    $num1 = 5;
    $num2 = 2;
    echo "Número 1: ", $num1,"<br> Número 2: ", $num2,"<br>"; 
    echo "Suma: ", $num1+$num2,"<br>";
    echo "Resta: ", $num1-$num2,"<br>";
    echo "Division: ", $num1/$num2,"<br>";
    echo "Multiplicación: ", $num1*$num2,"<br>";
    echo "Resto: ", $num1%$num2;
    ?>
    <br><hr>
    <?php
    //Ejercicio N°3
    echo "Celsius a Fahrenheit <br>";
    $celsius = 20;
    $fahrenheit = $celsius*1.8+32;
    echo "20°C es ", $fahrenheit,"°F";
    ?>
    <br><hr>
    <?php
    //Ejercicio N°4
    echo "Rectángulo de Base 16cm y Altura 12cm <br>";
    $base = 16;
    $altura = 12;
    $perimetro = 2*$base + 2*$altura;
    $area = $base * $altura;
    echo "El área del Rectángulo es: ", $area,"<br>";
    echo "El perímetro del Rectángulo es: ", $perimetro;
    ?>
    <br><hr>
    <?php
    //Ejercicio N°5
    echo "Círculo de Radio 30cm <br>";
    $radio = 30;
    $perimetro =  2*pi()*$radio;
    $area = pi()*($radio**2);
    echo "El área del Círculo es: ", $area,"<br>";
    echo "El Perímetro del Círculo es: ", $perimetro;
    ?>
</body>
</html>