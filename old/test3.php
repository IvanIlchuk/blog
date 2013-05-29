<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Передача змінних методом POST</title>
</head>

<body>



<?php

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$vic = $_POST['vic'];

echo "<p>Ім'я введене на попередній сторінці: $name <br>Прізвище: $lastname <br>  Вік: $vic, і трохи смайликів))))))))))))))))";

?>

</body>
</html>
