<div id="content"> 

<?php
$result = mysql_query ("SELECT id,page,title,meta_d,meta_k,text FROM price",$db);

$myrow = mysql_fetch_array ($result);

do {

printf("<table  width='580px;' class='mater'>
		<tr>
			<td class='mater_title'></td>
			<td>%s</td><td>%s</td><td>%s</td>
		</tr>
		
		</table>",$myrow["meta_d"], $myrow["text"], $myrow["meta_k"]);

		
}
while ($myrow = mysql_fetch_array ($result));
?>


 </div>

<!--<php echo $myrow['text']; ?>-->