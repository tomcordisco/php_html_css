<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css_log.css">
</head>
<body>
	<h1>Welcome!</h1>

	<?php
	$conexion=mysqli_connect("localhost", "c0230365_6to2020", "pozo62moRA", "c0230365_6to2020") or 
		die("Problems with the conecction.");

	$registros=mysqli_query($conexion, "select ID, User, Password
		from Cordisco_Table_Two where User='$_REQUEST[User]' and Password='$_REQUEST[Password]'") or
		die("Problems with the select: ".mysqli_error($conexion));

	$usu=$_REQUEST['User'];
	$con=$_REQUEST['Password'];

	if($reg=mysqli_fetch_array($registros)) {
		if($reg['User']==$User and $reg['Password']==$Password) {
	?>

	<form action="Home_Page.php"> 
		<input class="input" type="submit" value="Go to Home Page"> 
	</form>

	<?php
		}
	}
	else echo '<div>User or password incorrect.</div>';


	?>


	<form action="log_page.php">
        <input class="form" type="submit" value="Back">
    </form><br>

    <form action="home_page.php">
        <input class="form" type="submit" value="Home">
    </form><br>

	<h4>Copyright © 2020 Cordisco's Company. All rights reserved. Contact: tom.cordisco2002@gmail.com</h4>
</body>
</html>