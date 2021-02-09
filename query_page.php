<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>User query</title>
    <link rel="stylesheet" type="text/css" href="css_query_page.css">
</head>
<body>
	<h1>User query</h1>

	<div>
		<form action = "query.php" method = "post">
			Names: <br>
			<input class = "input" type = "text" name ="names" required><br><br>
			Surnames: <br>
			<input class = "input" type = "text" name = "surnames" required><br><br>
			<input class = "button" type = "submit" name = "Send" value = "Serch">
		</form>
	</div>	


    <form action="home_page.php">
        <input class="form" type="submit" value="Home">
    </form><br>
    
    <h4>Copyright © 2020 Cordisco's Company. All rights reserved. Contact: tom.cordisco2002@gmail.com</h4>
</body>
</html>
