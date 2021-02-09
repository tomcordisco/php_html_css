<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data modification</title>
    <link rel="stylesheet" type="text/css" href="css_modify.css">
}
</head>
<body>
	<h1>Data modification</h1>

	<?php  
	$conexion = mysqli_connect("localhost", "c0230365_6to2020", "pozo62moRA", "c0230365_6to2020") or
		die("Problems with the conecction.");

	mysqli_query($conexion, "update Cordisco_Table
			set email='$_REQUEST[newemail]' 
			where email='$_REQUEST[newemail]'") or
		die("Problems with the select:".mysqli_error($conexion));
		echo '<div>That E-Mail was modified.</div>';
	?>

    <form action="home_page.php">
        <input class="form" type="submit" value="Home">
    </form><br>

    <form action="modify_page.php">
        <input class="form" type="submit" value="Back">
    </form><br>

<h4>Copyright © 2020 Cordisco's Company. All rights reserved. Contact: tom.cordisco2002@gmail.com</h4>
</body>
</html>