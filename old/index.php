<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>PHP �������</title>
</head>

<body>

<body>
<?php

$name = "�����, �� ������ �� ��������� \"������ �������\"";
$age = 25;

echo "$age";

echo "<br>$name";

echo "<p align='center'>���������</p>";

echo "<br>���� ����� ����� - $name, ���� $age ����!!!";

$n = 10;

$c = $age + $n;

echo "<br>������ ����� 10 ���� ���� $c ����";

$q = 12;

$r = 45;

$f = $q * $r;
echo "<br>12 ��������� �� 45 ���� $f";

$w = 80;

$e = 23;

$t = $w / $e;
echo "<p>80 ������� �� 23 ���� $t!";
$h = $w.$f;

echo "<br>$h<br>";

$z = 14;

$Z = 35;

$x = $z.$Z;

echo "<br>$x<br>";

if (isset($dd))
{
echo "����� n ���� �� ������� $n";
}

else

{
echo "����� d �� ���� �� �������";

}

$v = 10;

unset($v);

echo "<br>$v";






?>


</body>
</html>
