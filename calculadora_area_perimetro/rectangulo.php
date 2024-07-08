<html charset="UFT-8">

<head><title> Calculo   </title></head>

<body>

    <h2> Solucion de area y perimetro para un rectangulo </h2>

    <br> <br>

    <h4> RESULTADO <h4>
    <br>

    <?php

    $largo=$_GET ["largo"];
    $ancho=$_GET ["ancho"];

    $area=$largo*$ancho;
    $perimetro=2*$largo+2*$ancho;

    echo "El area del rectangulo es: ".$area." y el perimetro es: ".$perimetro;
    

    ?>

</body>
</html>