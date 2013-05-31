<?php
include ("blocks/bd.php"); /*з'єднюємося з базою*/
/*$result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE title='price'",$db);*/
$result = mysql_query("SELECT title,meta_d,meta_k,date,text FROM cart WHERE title='cartrige'",$db);
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
  <div id="menu"><?php include("nav1.php");?></div>


  <div id="content"> 

<?php
$result = mysql_query ("SELECT id,title,meta_d,meta_k,date,text FROM cart",$db);

$myrow = mysql_fetch_array ($result);

do {

printf("<table align='center'  class='mater'>
		<tr>
			<td class='mater_title'><p class='price_name'>
			<a class='ton'?id=%s'>%s</a>
			<p class='price_adds'>Дата добавлення:	%s</p></td>
		</tr>
		<p>%s</p><p>%s</p>
		<tr>
		</tr>
		</table><br><br>",$myrow["id"],$myrow["meta_d"], $myrow["date"],$myrow["text"],$myrow["meta_k"]);
		
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