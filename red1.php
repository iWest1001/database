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

            $napravlenie=$_POST['napravlenie'];
            $kod=$_POST['kod_naprav'];
            $podgruppa=$_POST['podgruppa'];

         $sql ="DELETE FROM gruppa WHERE napravlenie='$napravlenie' and kod_naprav='$kod' and podgruppa='$podgruppa'";
         echo "Удаление успешно";
        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));


        mysqli_close($link);
        ?>

    </body>
</html>
