<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <h1>Отчёт</h1>

        <?php include("nav.php"); ?>
        <br> </br> <br> </br>

        <?php
        require_once 'connection.php'; // подключаем скрипт

        $link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка " . mysqli_error($link));
            $period=$_POST['period'];
            $period2=$_POST['period2'];
            $sql = "SELECT student.Familiya, student.Imya, student.Otchestvo, zanyatiya.data, prepodavatel.Familiya, zanyatiya.predmet, propuski.dop_svedeniya, propuski.prichina

    FROM student, zanyatiya, prepodavatel, propuski, gruppa,poseshaet

    where student.ID_gruppi=gruppa.ID_gruppi and gruppa.ID_gruppi=poseshaet.ID_gruppi and poseshaet.ID_zanyatiya=zanyatiya.ID_zanyatiya and zanyatiya.ID_prepod=prepodavatel.ID_prep and propuski.ID_student=student.ID_student and zanyatiya.data>'$period' and zanyatiya.data<'$period2'";

        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
        if($result)
        {
            $rows = mysqli_num_rows($result); // количество полученных строк

            echo "<table border='1' ><tr><th>Фамилия студента</th><th>Имя</th><th>Отчество</th><th>Дата занятия</th><th>Фамилия преподавателя</th><th>Предмет</th><th>Дополнительные сведения</th><th>Причина</th></tr>";
            for ($i = 0 ; $i < $rows ; ++$i)
            {
                $row = mysqli_fetch_row($result);
                echo "<tr>";
                    for ($j = 0 ; $j < 8 ; ++$j) echo "<td>$row[$j]</td>";
                echo "</tr>";
            }
            echo "</table>";

            // очищаем результат
            mysqli_free_result($result);
        }

        mysqli_close($link);
        ?>

    </body>
</html>
