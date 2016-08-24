
<style>
.multis {
    color: blue;
}
.results {
    color: red;
}
.multis, .results {
    display: inline;
}

</style>

<form action="ejercicio-5.php" method="POST">
	<input type="text" name="numero">
	<input type="submit">
</form>
<?php 




if (isset($_POST["numero"]) && is_numeric($_POST["numero"])) {
	$numero = $_POST["numero"];
}
else{
	$numero = 1;
}

for ($i=1; $i <=10 ; $i++) { 

	echo "<div class='multis'>";
	echo $numero." x ".$i." = ";
	echo "</div>";
	echo "<div class='results'>";
	echo $numero*$i;
	echo "</div></br>";
}

 ?>
