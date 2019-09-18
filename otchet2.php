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
            $napravlenie=$_POST['napravlenie'];
            $gruppa=$_POST['gruppa'];
        $sql = "SELECT propuski.prichina, gruppa.napravlenie,gruppa.kod_naprav,gruppa.podgruppa, SUM(propuski.chasi) as sum from student, propuski, gruppa where student.ID_student=propuski.ID_student and gruppa.napravlenie='$napravlenie' and gruppa.kod_naprav='$gruppa' and gruppa.ID_gruppi=student.ID_gruppi GROUP by propuski.prichina";

        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
        if($result)
        {
            $rows = mysqli_num_rows($result); // количество полученных строк

            echo "<table border='1'><tr><th>Причина</th><th>Группа</th><th>Код группы</th><th>Подгруппа</th><th>Сумма пропущенных часов</th></tr>";
            for ($i = 0 ; $i < $rows ; ++$i)
            {
                $row = mysqli_fetch_row($result);
                echo "<tr>";
                    for ($j = 0 ; $j < 5 ; ++$j) echo "<td>$row[$j]</td>";
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
