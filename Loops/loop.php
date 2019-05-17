<?php

$array = [
	["tv-show" => "FC De Kampioenen", "rating" => 1],
	["tv-show" => "Bevergem", "rating" => 5],
	["tv-show" => "Temptation Island", "rating" => 1],
  ["tv-show" => "De slimste mens", "rating" => 2],
  ["tv-show" => "In de gloria", "rating" => 4],
	["tv-show" => "Alles kan beter", "rating" => 4],
	["tv-show" => "Het geslacht de Pauw", "rating" => 3],
	["tv-show" => "Gert Late Night", "rating" => 4]
];

?>

<table>
<tr>
  <th>tv-show</th>
  <th>rating</th>
</tr>


<?php
foreach($array as $arr):
?>

<tr>
	<td><a target="_blank" href="http://www.google.com/search?q=<?echo $arr["tv-show"]; ?>"><?php echo $arr["tv-show"]; ?></a></td>
	<td>
		<?php
			for ($i=1;$i<=$arr["rating"];$i++){
		?>
		<img src="star.png" height="42" width="42">
		<?php
			}

			//echo $arr["rating"];

		?>

	</td>
</tr>

<?php
endforeach;
?>


</table>
