<form method="POST" action=>
<tr> 
	<h2><b><td> Genre Film yang Disukai	: </td></b> </h2>
<td> <input type="checkbox" name="Genre[]" value="Horror"> Horror </td>
<br><br>
<td><input type="checkbox" name="Genre[]" value="Action"> Action </td>
<br><br>
<td>  <input type="checkbox" name="Genre[]" value="Anime"> Anime </td>
<br><br>
<td><input type="checkbox" name="Genre[]" value="Thriller"> Thriller</td>
<br><br>
<td>  <input type="checkbox" name="Genre[]" value="Animasi"> Animasi </td>
<br><br>

</tr>


<tr>
	
<h2><b> <td> Tempat Wisata Tujuan Travelling	: </td>  </b> </h2>
<td><input type="checkbox" name="Tempat[]" value="Bali"> Bali </td>
<br><br>
<td>  <input type="checkbox" name="Tempat[]" value="Raja Ampat"> Raja Ampat </td>
<br><br>
<td>  <input type="checkbox" name="Tempat[]" value="Pulau Derawan"> Pulau Derawan</td>
<br><br>
<td>  <input type="checkbox" name="Tempat[]" value="Bangka Belitung"> Bangka Belitung </td>
<br><br>
<td>  <input type="checkbox" name="Tempat[]" value="Labuan Bajo"> Labuan Bajo </td>
<br><br>

 <input type="submit" name="Send" value="Send"> 
<input type="reset" name="Reset" value="Reset"> 
<br>

</form>



<?php 
if(isset($_POST['Send'])){
	$film = $_POST["Genre"];
	foreach($film as $filmini){
		echo $filmini."<br>";
	}

 	echo "<br>";
 	$tempat = $_POST["Tempat"];
 	foreach ($tempat as $tempattravelling){
 		echo $tempattravelling."<br>";
 	}
 }
 ?>
