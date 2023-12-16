<html>
<body>
<title>Yulia_Lab1</title>
<form action="pow.php" method="get">
Введите число: <input type="float" name="value"><br>
<input type="submit">
</form>

<?php 
$a = $_GET["value"];
echo $a, "^2 = ", pow($a,2);
?>

</body>
</html>