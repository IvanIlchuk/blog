<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Массив</title>
</head>
<body>
<?php

/*	Перший спосіб створення масиву		*/
$name[0] = "Саша";
$name[1] = "Маша";
$name[2] = "Ваня";
$name[3] = "Аня";
$name[4] = "Костя";

echo "<p>";

echo $name[3];

/* Другий спосіб створення масиву		*/
$name = array(0 => "Саша", 1 => "Маша", 2 => "Ваня", 3 => "Аня", 4 => "Костя");

echo "<p>";

echo "$name[0] <p>$name[2]";

$capital ["Russia"] = "Москва";
$capital ["USA"] = "Вашингтон";
$capital ["France"] = "Париж";
$capital ["Ukraine"] = "Київ";
$capital ["Italy"] = "Рим";

echo "<p>";

echo $capital ["Ukraine"];

echo"<p>";


$naselennja = array ("Rassia" => "150",  "USA" => "250", "France" => "40", "Ukraine" =>" 45", "Italy" => "35");

echo "Столиця України - ".$capital["Ukraine"]." Населення України -".$naselennja["Ukraine"]. " мільйонів людей.";

echo "<p>Столиця України - $capital[Ukraine] Населення України - $naselennja[Ukraine] мільйонів людей.</p>";


$auto["bmw"] = array ("color" => "Білий", "year" => "2005", "pr" => "2000");
$auto["audi"] = array ("color" => "Синій", "year" => "2003", "pr" => "2200");

echo "<p> Рік BMW - ".$auto["bmw"]["year"];




?>


</body>
</html>
