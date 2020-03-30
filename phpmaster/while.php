

<?php 
//ciclo while para sacar el valor cuadrado de un numero
$cont= 0;
while($cont <= 40){
    $cuadrado = $cont * $cont;
    echo "el numero es $cont y su doble $cuadrado <br/>";
$cont++;
}
/*
lo mismo con for
*/

for($cont = 0; $cont <= 10; $cont++){
    $cuadradd = $cont * $cont;
    echo " $cont es $cuadradd <hr/>";
}
?>