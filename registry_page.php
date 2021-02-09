<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registry</title>
    <link rel="stylesheet" type="text/css" href="css_registry_page.css"> 
</head>
<body>
    <h1>Registry</h1>

    <div>
        <form action="registry_connection.php" method="post">
            E-mail: <br>
            <input class="input" type="text" name="email" required><br><br>
            Names: <br>
            <input class="input" type="text" name="names" required><br><br>
            Surnames: <br>
            <input class="input" type="text" name="surnames" required><br><br>
            D.N.I.: <br>
            <input class="input" type="text" name="dni" required><br><br>
            <input class = "button" type = "submit" name = "Send" value = "Send"><br><br>
        </form>
    </div>

    <form action="home_page.php">
        <input class="form" type="submit" value="Home">
    </form><br><br>

<h4>Copyright © 2020 Cordisco's Company. All rights reserved. Contact: tom.cordisco2002@gmail.com</h4>
</body>
</html>