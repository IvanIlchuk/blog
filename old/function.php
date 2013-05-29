<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Функції</title>
</head>

<body>


<?php



function link($d,$n)
{
echo "<a href='$d' target='blank'>$n</a>";
}
link ('http://www.youtube.com', 'Ютуб');
echo"<p>";



function square ($a)
{
$result = $a*$a;
return $result;
}

$new = 80;

echo "Квадрат 80	 дорівнює - ";

$q = square (80);


echo $q;

$name[] = "Олексндр";
$name[] = "Микола";
$name[] = "Діма";
$name[] = "Діма";
$name[] = "Діма";

/*забирає пробіли*/
$w = " Ноутбук ";
$w = trim($w);
echo $w;
/*  виводить кілька елементів */
$box = array ("Персик","Огірок");
list ($fruit,$vegetable) = $box;

echo "<p>$fruit<p>$vegetable";


/* Зупниняє роботу програми
exit("<p>Робота програми завершена на 45 рдку.");
*/

$q2 = count($name);
echo "<p>В масиві name знайдено ".count($name)."  елементів."


/*
function link($link,$title)

{
echo "<a href='$link' target='blank'>$title</a>";
}

echo"<p>";

link('http://www.odnoklassniki.ru', 'Однокласники	');
*/




?>




</body>
</html>