<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User query</title>
    <link rel="stylesheet" type="text/css" href="css_query.css">
</head>
<body>
	<h1>User query</h1>

	<?php
	$conexion=mysqli_connect("localhost", "c0230365_6to2020", "pozo62moRA", "c0230365_6to2020") or 
    die("Problems with the connection.");
		
	$registros=mysqli_query($conexion, "select dni, names, surnames, email
		from Cordisco_Table where names='$_REQUEST[names]' and surnames='$_REQUEST[surnames]'") or
		die("Problems with the select: ".mysqli_error($conexion));

	if($reg=mysqli_fetch_array($registros)) {
		echo "<div class='one'>";
		echo "Surname: ", $reg['surname'], "<br>", "<hr>";
 		echo "Name: ", $reg['names'], "<br>", "<hr>";
		echo "E-mail: ", $reg['email'], "<br>", "<hr>";
		echo "D.N.I.: ", $reg['dni'];
		echo "</div>";
	}
	else echo '<div class= "two"> The client does not exist. </div>';
	?>


    <form action="home_page.php">
        <input class="form" type="submit" value="Home">
    </form><br>

    <form action="query_page.php">
        <input class="form" type="submit" value="Back">
    </form><br>

<h4>Copyright © 2020 Cordisco's Company. All rights reserved.</h4>
</body>
</html>
