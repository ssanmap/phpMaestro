<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="post">
Inserte numero 1:
<input type="text" name="num1" >
<br>
Inserte numero 2:
<input type="text" name="num2">
<br>
resultado:
<input type="text" name ="res">
<input type="button" value="sumar" name="sumar">

</form>
</body>
</html>

<?php
if(isset($_POST['num1']) && isset($_POST['num2'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$res = $_POST['res'];
$sumar =$_POST['sumar'];
}
$num1 + $num2 = $res;



?>