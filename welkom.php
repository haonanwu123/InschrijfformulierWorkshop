<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    echo "<h1>" . "welkom" . "</h1>" . "<br>";
    echo $_SESSION["naam"] . "<br>";
    echo $_SESSION["email"] . "<br>";
    echo $_SESSION["klas"] . "<br>";
    echo $_SESSION["keuze"] . "<br>";
    ?>
</body>
</html>