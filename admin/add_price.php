<?php
include ("blocks/bd.php");
if (isset($_POST['page']))	 {$page = $_POST['page']; 		if ($page == '') {unset($page);}	}
if (isset($_POST['title']))  {$title = $_POST['title'];		if ($title == '') {unset($title);}	}
if (isset($_POST['meta_d'])) {$meta_d = $_POST['meta_d']; 	if ($meta_d == '') {unset($meta_d);}	}
if (isset($_POST['meta_k'])) {$meta_k = $_POST['meta_k']; 	if ($meta_k == '') {unset($meta_k);}	}
if (isset($_POST['text'])) 	 {$text = $_POST['text']; 		if ($text == '') {unset($text);}	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<title>Добавлення статей</title>
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<?php include("blocks/header.php"); ?> <!--Підключаємо верхній графічний елемент -->

<?php include("blocks/nav.php");?> <!--Підключаємо панель навігації -->

   <div id="fon">
  <!--<div id="menu">меню</div>-->
  
	<?php
if (isset($page) && isset($title) && isset($meta_d) && isset($meta_k) && isset($text) )

{
/*Тут можна заносити інформацію в базу*/
$result = mysql_query ("INSERT INTO price (page,title,meta_d,meta_k,text) VALUES 
('$page', '$title', '$meta_d', '$meta_k', '$text')");


if ($result == 'true') {echo "<p>Вашу статтю успішно добавлено!</p>";}
else {echo "<p>Вашу статтю не добавлено!(((((((</p>";}

}

else {echo "<p>Ви ввели не всю інформацію</p>";}

	?>
 <div class="clear"></div>
</div>

<?php include("blocks/footer.php")?> <!---підключаємо нижній графічний елемент-->
   
</body>
</head>
</html>