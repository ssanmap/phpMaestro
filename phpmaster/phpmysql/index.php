<?php


$conexion = mysqli_connect(

    "localhost",

    "root",

    "",

   "notas"

);

if(mysqli_connect_errno()){
    echo "la conexxion ha fallado ".mysqli_connect_error();
}

else {
    echo " <h1>conexion exitosa </h1>";
}


//consultas para configurar caracteres

mysqli_query($conexion, "SET NAMES 'utf8'");

//consultas sql
$query = mysqli_query($conexion, "select * from notasde");

while($nota = mysqli_fetch_assoc($query)){
    var_dump($nota);
}


//insertar una variable

$sql = "insert into notasde values(null, 'notas desde php', 'asas', 'green')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo "datos insertados correctamente";
}
else{
    echo "erorr".mysqli_error($conexion);
}
?>
