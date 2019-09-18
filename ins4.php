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

            $id_student=$_POST['id_student'];
            $id_zan=$_POST['id_zan'];
            $prichina=$_POST['prichina'];
            $poyasnenie=$_POST['poyasnenie'];
            $dop=$_POST['dop'];
            $cahsi=$_POST['chasi'];


        $sql = "INSERT INTO `propuski` (`ID_prop`, `ID_student`, `ID_zanyatiya`, `prichina`, `poyasnenie`, `dop_svedeniya`,`chasi`) VALUES (NULL, '$id_student', '$id_zan', '$prichina', '$poyasnenie', '$dop','$chasi')";




         echo "Добавление успешно";

        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));



        mysqli_close($link);

        ?>

    </body>
</html>
