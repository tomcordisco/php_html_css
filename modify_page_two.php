<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data modification</title>
    <link rel="stylesheet" type="text/css" href="css_modify_page_two.css">
</head>
<body>
	<h1>Data modification</h1>

	<?php  
	$conexion=mysqli_connect("localhost", "c0230365_6to2020", "pozo62moRA", "c0230365_6to2020") or
		die("Problems with the conection");

	$registros=mysqli_query($conexion,"select * from Cordisco_Table where email='$_REQUEST[email]'") or 
		die("Problems with the select:".mysqli_error($conexion));

	if($reg=mysqli_fetch_array($registros)) {
	?>
	<div>
		<form action = "modify.php" method = "post">
			Enter new E-Mail: <br>
			<input class = "input" type = "text" name ="newemail" value = "<?php echo $reg['email'] ?>"><br>
			<input type = "hidden" name = "oldemail" value = "<?php echo $reg['email'] ?>"><br><br>
			<input class = "button" type = "submit" value ="Modify">
		</form>
	</div>
	<?php
	}
	else echo "There is not user with that E-mail.";
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