<?php
include ("blocks/bd.php"); /*з'єднюємося з базою*/
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM contact WHERE page='contact'",$db);
$myrow = mysql_fetch_array($result);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="description" content="<?php echo $myrow['meta_d']; ?>  ">
<meta name="keywords" content="<?php echo $myrow['meta_k']; ?>  ">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<title><?php echo $myrow['title']; ?>  </title>
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<?php include("blocks/header.php"); ?> <!--Підключаємо верхній графічний елемент -->

<?php include("blocks/nav.php");?> <!--Підключаємо панель навігації -->

   <div id="fon">
  <div id="menu">меню</div>
  <div id="content"><?php echo $myrow['text']; ?> </div>
  <!-- Тут буде розміщена інформація про наші контакти...--->

 <div class="clear"></div>
</div>

<?php include("blocks/footer.php")?> <!---підключаємо нижній графічний елемент-->
   
</body>
</head>
</html>