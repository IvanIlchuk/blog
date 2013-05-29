<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Конструкція if-else</title>
</head>

<body>

<?php

$a = 2;
$b = 2;
$c = 4;
$d = 4;
$cat = "juli";
$dog = "hart";

if ($a == $b and $c == $d)
{

echo <<<HERE




HERE;

if ($cat != $dog)
{
echo "<br>В змінних cat і dog присутні різні імена!!!";
}


}
else
{
echo "Змінні не рівні!";

}


?>
<br>
<a href="test4.php" target="_blank"">Сторінка test4.php</a>




</body>
</html>
