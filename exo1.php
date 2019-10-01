<!DOCTYPE html>
<html>
<head>
	<title>condition</title>
</head>
<body>
<form action="exo1.php" method="POST">
	<input type="number" name="valeur" placeholder="entrer la valeur" required><br>
	<input type="submit" value="entrer">
</form>
</body>
</html>



<?php 
$n = $_POST["valeur"];
if($n < 0){
	echo "le nombre est negative";
}
elseif ($n > 0) {
	echo "le nombre est positive";
}
else {
	echo "le nombre est nul";
}


 ?>