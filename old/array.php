<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>������</title>
</head>
<body>
<?php

/*	������ ����� ��������� ������		*/
$name[0] = "����";
$name[1] = "����";
$name[2] = "����";
$name[3] = "���";
$name[4] = "�����";

echo "<p>";

echo $name[3];

/* ������ ����� ��������� ������		*/
$name = array(0 => "����", 1 => "����", 2 => "����", 3 => "���", 4 => "�����");

echo "<p>";

echo "$name[0] <p>$name[2]";

$capital ["Russia"] = "������";
$capital ["USA"] = "���������";
$capital ["France"] = "�����";
$capital ["Ukraine"] = "���";
$capital ["Italy"] = "���";

echo "<p>";

echo $capital ["Ukraine"];

echo"<p>";


$naselennja = array ("Rassia" => "150",  "USA" => "250", "France" => "40", "Ukraine" =>" 45", "Italy" => "35");

echo "������� ������ - ".$capital["Ukraine"]." ��������� ������ -".$naselennja["Ukraine"]. " ������� �����.";

echo "<p>������� ������ - $capital[Ukraine] ��������� ������ - $naselennja[Ukraine] ������� �����.</p>";


$auto["bmw"] = array ("color" => "�����", "year" => "2005", "pr" => "2000");
$auto["audi"] = array ("color" => "����", "year" => "2003", "pr" => "2200");

echo "<p> г� BMW - ".$auto["bmw"]["year"];




?>


</body>
</html>
