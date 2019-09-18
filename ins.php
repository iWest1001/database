<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <h1>Редактирование</h1>
        <?php include("nav.php"); ?>
        <br> </br> <br> </br>

        <?php

        require_once 'connection.php'; // подключаем скрипт

        $link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка " . mysqli_error($link));

            $familiya=$_POST['familiya'];
            $Imya=$_POST['name'];
            $Otchestvo=$_POST['otchestvo'];
            $gruppa=$_POST['gruppa'];
            $kod=$_POST['kod'];
            $podgruppa=$_POST['podruppa'];

        $sql = "INSERT INTO `student` (`ID_student`, `ID_gruppi`, `Familiya`, `Imya`, `Otchestvo`) VALUES (NULL, '2', '$familiya', '$Imya', '$Otchestvo')";




         echo "Добавление успешно";

        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));



        mysqli_close($link);

        ?>

    </body>
</html>
