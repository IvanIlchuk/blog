<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>����������� switch case</title>
</head>

<body>

<?php
$sposob = "000";

switch ($sposob)

{
	case"����":
	echo "<p>��� �������� ����� ����....";
	break;
	
	case"�����":
	echo "<p>��� �������� ����� �����....";
	break;
	
	case"Western Union":
	echo "<p>��� �������� ����� Western Union....";
	break;
	
	default:
	echo "<p>�� �� ������� ����� ������....";
	break;


}

?>


</body>
</html>
