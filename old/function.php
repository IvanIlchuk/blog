<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>�������</title>
</head>

<body>


<?php



function link($d,$n)
{
echo "<a href='$d' target='blank'>$n</a>";
}
link ('http://www.youtube.com', '����');
echo"<p>";



function square ($a)
{
$result = $a*$a;
return $result;
}

$new = 80;

echo "������� 80	 ������� - ";

$q = square (80);


echo $q;

$name[] = "��������";
$name[] = "������";
$name[] = "ĳ��";
$name[] = "ĳ��";
$name[] = "ĳ��";

/*������ ������*/
$w = " ������� ";
$w = trim($w);
echo $w;
/*  �������� ����� �������� */
$box = array ("������","�����");
list ($fruit,$vegetable) = $box;

echo "<p>$fruit<p>$vegetable";


/* �������� ������ ��������
exit("<p>������ �������� ��������� �� 45 ����.");
*/

$q2 = count($name);
echo "<p>� ����� name �������� ".count($name)."  ��������."


/*
function link($link,$title)

{
echo "<a href='$link' target='blank'>$title</a>";
}

echo"<p>";

link('http://www.odnoklassniki.ru', '������������	');
*/




?>




</body>
</html>