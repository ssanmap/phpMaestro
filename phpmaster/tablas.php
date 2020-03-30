<?php

echo "<table border='1'> <tr>";

echo "<tr>";
for($cabecera = 1; $cabecera <= 10; $cabecera++){

    echo "<td>tabla del $cabecera</td>";

}

echo "</tr>"; //cierre fila 1 de celdas
echo "<tr>"; // inicio fila 2 de celdas
for($i = 1; $i <=10; $i++){
    echo "<td>";

    for($x = 1; $x <=10; $x++){
        echo "$i x $x = ".($i * $x) .'<br>';
    }
    echo "</td>";
    
}
echo "</tr>"; // cierre fila 2 de celdas

echo "</table"; // fin tabla 





function tablas($num){
    for($i = 1; $i <=10; $i++){
        $operacion = $num*$i;
        echo "$num x $i = $operacion <br/>";
    }
}
// tablas(66);
if(isset($_GET['num'])){
tablas($_GET['num']);
tablas(3);
}
else{
    echo 'no';
}


?>