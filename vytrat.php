<?php
include ("blocks/bd.php"); /*з'єднюємося з базою*/
$result = mysql_query("SELECT title,date,meta_k,meta_k,text FROM vytrat WHERE title='Vytrat'",$db);
$myrow = mysql_fetch_array($result);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="description" content="<?php echo $myrow['date']; ?>  ">
<meta name="keywords" content="<?php echo $myrow['meta_k']; ?>  ">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<title><?php echo $myrow['title']; ?>  </title>
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<?php include("blocks/header.php"); ?> <!--Підключаємо верхній графічний елемент -->

<?php include("blocks/nav.php");?> <!--Підключаємо панель навігації -->

   <div id="fon">
  <div id="menu"><?php include("nav1.php");?></div>
  
  
  <div id="content"> <?php
$result = mysql_query ("SELECT id,title,meta_d,meta_k,date,text FROM vytrat",$db);

$myrow = mysql_fetch_array ($result);

do {

printf("<table align='center'  class='mater'>
		<tr>
			<td class='mater_title'><p class='price_name'>
			<a href='price.php' class='ton'?id=%s'>%s</a>
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


 <div class="clear"></div>
</div>

<?php include("blocks/footer.php")?> <!---підключаємо нижній графічний елемент-->
   
</body>
</head>
</html>