<?php
include ("blocks/bd.php"); /*з'єднюємося з базою*/
/*$result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE title='price'",$db);*/
$result = mysql_query("SELECT title,meta_d,meta_k,date,text FROM price WHERE title='price'",$db);
$myrow = mysql_fetch_array($result);
?>

<!DOCTYPE HTML>
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
  <div id="menu"><p align="center" class="title">Навігація</p>
<div id="coolmenu">
<a href="index.php">Головна</a>
<a href="contact us.php">Контакти</a>
<a href="about us.php">Про нас</a>
<a href="contacts.php">Витратні матеріали</a>
</div></div>


  <div id="content"> 

<?php
$result = mysql_query ("SELECT id,title,meta_d,meta_k,date,text FROM price",$db);

$myrow = mysql_fetch_array ($result);

do {

printf("<table align='center'  class='mater'>
		<tr>
			<td class='mater_title'><p class='price_name'>
			<a href='view_price.php?id=%s'>%s</a>
			<p class='price_adds'>Дата добавлення:	%s</p></td>
		</tr>
		<p>%s</p>
		<tr>
		</tr>
		</table><br><br>",$myrow["id"],$myrow["meta_d"], $myrow["date"],$myrow["text"]);

		
}
while ($myrow = mysql_fetch_array ($result));
?>


 </div>

<!--<php echo $myrow['text']; ?>
  <php include("blocks/content.php");?> <!--Підключаємо контент -->
  <!---На цій сторінці буде розміщена інформація про наші ціни...--->

 <div class="clear"></div>
</div>

<?php include("blocks/footer.php")?> <!---підключаємо нижній графічний елемент-->
   
</body>
</head>
</html>