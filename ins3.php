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

            $id_prep=$_POST['id_prep'];
            $predmet=$_POST['predmet'];
            $data=$_POST['data'];
            $time=$_POST['time'];
            $mesto=$_POST['mesto'];


        $sql = "INSERT INTO `zanyatiya` (`ID_zanyatiya`, `ID_prepod`, `predmet`, `data`, `vremya`, `mesto`) VALUES (NULL, '$id_prep', '$predmet', '$data', '$time', '$mesto')";




         echo "Добавление успешно";

        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));



        mysqli_close($link);

        ?>

    </body>
</html>
