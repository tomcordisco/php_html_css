<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Unsubscribe</title>
    <link rel="stylesheet" type="text/css" href="css_user_page.css">
</head>

<body>
    <h1>User Unsubscribe</h1>

    <div>
        <form action = "user_unsubscribe.php" metod = "post">
        D.N.I.: <br>
            <input class = "input" type = "text" name = "dni" required><br><br>
            <input class = "button" type = "submit" name = "Send" value = "Delete">
        </form>
    </div>

    <form action="home_page.php">
        <input class="form" type="submit" value="Home">
    </form><br>

    <h4>Copyright © 2020 Cordisco's Company. All rights reserved. Contact: tom.cordisco2002@gmail.com</h4>
</body>
</html>