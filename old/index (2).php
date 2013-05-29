<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<title>Головна сторінка адміністратора</title>
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<?php include("blocks/header.php"); ?> <!--Підключаємо верхній графічний елемент -->

<?php include("blocks/nav.php");?> <!--Підключаємо панель навігації -->

   <div id="fon">
  <!--<div id="menu">меню</div>-->
  <!--<div id="content" >Ласкаво просимо в адміністраторський блок  </div> --->
<?php include("blocks/content.php");?> <!--Підключаємо контент -->
 <div class="clear"></div>
</div>

<?php include("blocks/footer.php")?> <!---підключаємо нижній графічний елемент-->
   
</body>
</html>
