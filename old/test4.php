<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>��������������� ����� SERVER</title>
</head>
		
<body>
<?php 

echo "<p>���� ip ������: ".$_SERVER['REMOTE_ADDR'];
echo "<p>��� ������� � ���� ���������� �������: ".$_SERVER['HTTP_USER_AGENT'];
if (isset($_SERVER['HTTP_REFERER']))
{
echo "<p>�� ���������	 �� ���� ������� � �������: ".$_SERVER['HTTP_REFERER'];
}
else
{
echo "<br>�� ��������� �� ���� ������� �������!";
}
?>

</body>
</html>
