<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        h1 {
            transform: translateX(500px);
        }
        label {
            float: left;
            display: block;
            width: 150px;
        }

        input[type="text"],input[type="email"] {
            display: inline;
            width: 200px;
        }

        input[tyoe="checkbox"] {
            float: left;
        }
        input[type="checkbox"] ~ label {
            float: none;
            display: inline;
        }

        input[type="submit"] {
            transform: translateX(500px);
        }
    </style>
    <h1 algin="center">Inschrijfformulier Workshop</h1>
    <form action="header.php" metod="post">
        <label calss="label1">Naam:</label>
        <input type="text" name="naam" placeholder="Typ tekst">
        <br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Typ tekst">
        <br>
        <label>Klas:</label>
        <input type="text" name="klas" placeholder="Typ tekst">
        <br>
        <label>Workschops</label>
        <br>
        <input type="radio" name="Drones" value="Drones">Drones
        <br>
        <input type="radio" name="RasberryPi" value="Rasberry Pi">Rasberry Pi
        <br>
        <input type="radio" name="Security" value="Security">Security
        <br>
        <br>
        <input type="checkbox" name="checkbox">
        <label>Ik ga akkoord met de voorwaarden</label>
        <br>
        <br>
        <input type="submit" name="inschrijven" value="Inschrijven">
    </form>
    <?php

    ?>
</body>
</html>