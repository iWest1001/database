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

            $id_gruppi=$_POST['id_gruppi'];
            $id_zan=$_POST['id_zan'];

        $sql = "INSERT INTO `poseshaet` (`ID_gruppi`, `ID_zanyatiya`) VALUES ('$id_gruppi', '$id_zan')";




         echo "Добавление успешно";

        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));



        mysqli_close($link);

        ?>

    </body>
</html>
