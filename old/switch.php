<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Конструкція switch case</title>
</head>

<body>

<?php
$sposob = "000";

switch ($sposob)

{
	case"Банк":
	echo "<p>Щоб оплатити через банк....";
	break;
	
	case"Пошта":
	echo "<p>Щоб оплатити через пошту....";
	break;
	
	case"Western Union":
	echo "<p>Щоб оплатити через Western Union....";
	break;
	
	default:
	echo "<p>Ви не вибрали спосіб оплати....";
	break;


}

?>


</body>
</html>
