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
           position: relative;
           left: 40%;
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
           position: relative;
           left: 40%;
        }
    </style>
    <h1 algin="center">Inschrijfformulier Workshop</h1>
    <form action="" method="post">
        <label calss="label1">Naam:</label>
        <input type="text" name="naam" placeholder="Typ tekst">
        <br>
        <label>Email:</label>
        <input type="text" name="email" placeholder="Typ tekst">
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
    if(isset($_POST['inschrijven'])) {
        if(!empty($_POST['email'])) {
            $check = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        }if($check === false) {
            echo "Email is not correct.<br>";
        }else {
        //   header("location:http://localhost/InschrijfformulierWorkshop/welkom.php");
        echo' welcome';
        }
       
    } else {
        echo "Je heb niet ingevuld." . "<br>";
    }
    ?>
</body>
</html>