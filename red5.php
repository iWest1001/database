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
            $name=$_POST['name'];
            $otchestvo=$_POST['otchestvo'];

         $sql ="DELETE FROM prepodavatel WHERE Familiya='$familiya' and Imya='$name' and Otchestvo='$otchestvo'";
         echo "Удаление успешно";
        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));


        mysqli_close($link);
        ?>

    </body>
</html>
