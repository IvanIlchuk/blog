<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Цикл While</title>
</head>

<body>
<?php


$a = 0;

while ($a <= 10 )
{
echo "$a<br>";
$a = $a + 1;
}

$sum = 0;
$i = 1;

while ($i <= 100)

{
$sum = $sum + $i;
$i++;
}




echo "Сума всіх чисел від 1 до 100 дорівнює - $sum";

?>


</body>
</html>
