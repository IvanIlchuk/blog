<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Передача змінних</title>
</head>

<body>

<?php

/*
$a = $_GET['a'];
$b = $_GET['b'];

echo $_GET['a'];

$c = $a + $b;

echo "<br>Сума змінних переданих через адресний рядок: $c";

echo "<p><a href='test.php?a=14&b=36'>Нові значення</a>";
*/



echo $_GET['g'];

$g = $_GET['g'];
$f = $_GET['f'];

$r = $g + $f;
echo "<br>Виводимо змінні: $r";

echo "<p><a href='test.php?g=98&f=672'>Нові значення</a>"
?>

</body>
</html>
