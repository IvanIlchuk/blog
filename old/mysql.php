<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>З'єднання з БД</title>
</head>

<body>
<?php


$db = mysql_connect("localhost","alex","12345");
mysql_select_db("firstbd",$db);


$result = mysql_query("SELECT * FROM firma",$db);
$myrow = mysql_fetch_array($result);

echo $myrow["name"];

?>

</body>
</html>
