<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>PHP сторінка</title>
</head>

<body>

<body>
<?php

$name = "Славік, він працюе на підприємстві \"Каскад Імпульс\"";
$age = 25;

echo "$age";

echo "<br>$name";

echo "<p align='center'>Автомобіль</p>";

echo "<br>Мого друга звуть - $name, йому $age років!!!";

$n = 10;

$c = $age + $n;

echo "<br>Славіку через 10 років буде $c років";

$q = 12;

$r = 45;

$f = $q * $r;
echo "<br>12 помножити на 45 буде $f";

$w = 80;

$e = 23;

$t = $w / $e;
echo "<p>80 поділити на 23 буде $t!";
$h = $w.$f;

echo "<br>$h<br>";

$z = 14;

$Z = 35;

$x = $z.$Z;

echo "<br>$x<br>";

if (isset($dd))
{
echo "Змінна n існує її значенні $n";
}

else

{
echo "Змінна d не існує її значенні";

}

$v = 10;

unset($v);

echo "<br>$v";






?>


</body>
</html>
