<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pagina</title>
</head>
<body>
<h1> Welcome</h1>
<?php 

$edad = 20;
$edadpermitida= 60;
$edadahora= 22;

if ($edadahora > $edadpermitida){
    echo 'es menor';
}
else {
    echo 'es mayor';
}
echo ' <br> <hr>';
$pais = "a";

if ($pais == "mexico" || $pais == "chile" || $pais == "peru")
{
    echo '<br> <en este pais se habla españsasdlkas <br>';
}

else{
    echo ' <br> no son latinos';
}

/*ejercicio 1
crear 2 variables y mostrar su valor por pantalla 
*/
$valor1 = "argentina"; // string
$valor2 = "america"; // string
echo "<h1> $valor1 y su cont es $valor2 </h1>";
/*ej 2 
escribir un script en php q nos devuelva 
todos los numeros pares del 1 al 100 
*/
echo '<br>';
for ($cont = 1; $cont <= 100; $cont++){
    if($cont%2 == 0){
        echo $cont . '<br/>';
    }
}
?>
    
</body>
</html>