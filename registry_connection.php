<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registry</title>
    <link rel="stylesheet" type="text/css" href="css_registry_page.css">
</head>
<body>
    <h1>Registry</h1>
    
    <?php
    $conexion=mysqli_connect("localhost", "c0230365_6to2020", "pozo62moRA", "c0230365_6to2020") or 
        die("Problems with the connection");

    mysqli_query($conexion, "insert into Cordisco_Table(names, surnames, email, dni) values 
        ('$_REQUEST[names]', '$_REQUEST[surnames]', '$_REQUEST[email]', '$_REQUEST[dni]')") or 
        die("Problems in the select: ".mysqli_error($conexion));

    mysqli_close($conexion);
    ?>

    <div>The user was registered.</div><br><br>


    <form action="home_page.php">
        <input class="form" type="submit" value="Home">
    </form><br>

    <form action="registry_page.php">
        <input class="form" type="submit" value="Back">
    </form><br>

    <h4>Copyright © 2020 Cordisco's Company. All rights reserved.</h4>
</body>
</html>
