<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>User Unsubscribe</title>
    <link rel="stylesheet" type="text/css" href="css_user_unsubscribe.css">
</head>

<body>
    <h1>User Unsubscribe</h1>
    
    <?php
	$conexion=mysqli_connect("localhost", "c0230365_6to2020", "pozo62moRA", "c0230365_6to2020") or 
		die("Problems with the conecction.");

	$registros=mysqli_query($conexion, "select dni from Cordisco_Table where
		dni='$_REQUEST[dni]'") or die("Problems with the select: ".mysqli_error($conexion));

	if($reg=mysqli_fetch_array($registros)) {
		mysqli_query($conexion, "delete from Cordisco_Table where dni='$_REQUEST[dni]'") or 
		die("Problems with the delete: ".mysqli_error($conexion));

		echo '<div>The user was deleted.</div>';
	}
	else echo '<div>There is not user with that D.N.I.</div>';

	mysql_close($conexion);
	?>
	
    <form action="home_page.php">
        <input class="form" type="submit" value="Home">
    </form><br>

    <form action="user_page.php">
        <input class="form" type="submit" value="Back">
    </form><br>

<h4>Copyright © 2020 Cordisco's Company. All rights reserved. Contact: tom.cordisco2002@gmail.com</h4>
</body>
</html>