<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
<h1>Пропуски всех студентов</h1>
<?php include("nav.php"); ?>
<br> </br> <br> </br>
<?php include("months.php"); ?>
<br> </br> <br> </br>
        <?php
        require_once 'connection.php'; // подключаем скрипт

        $link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка " . mysqli_error($link));

            $sql = "SELECT student.Familiya, student.Imya, student.Otchestvo, propuski.dop_svedeniya, propuski.prichina,propuski.chasi

            FROM student, zanyatiya, prepodavatel, propuski, gruppa,poseshaet

            where student.ID_gruppi=gruppa.ID_gruppi and gruppa.ID_gruppi=poseshaet.ID_gruppi and poseshaet.ID_zanyatiya=zanyatiya.ID_zanyatiya and zanyatiya.ID_prepod=prepodavatel.ID_prep and propuski.ID_student=student.ID_student and zanyatiya.data='2019-10-05'";

        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
        if($result)
        {
            $rows = mysqli_num_rows($result); // количество полученных строк

            echo "<table border='1'><tr><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Доп сведения</th><th>Причина</th><th>Часы</th></tr>";
            for ($i = 0 ; $i < $rows ; ++$i)
            {
                $row = mysqli_fetch_row($result);
                echo "<tr>";
                    for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
                echo "</tr>";
            }
            echo "</table>";


            // очищаем результат
            mysqli_free_result($result);
        }

        mysqli_close($link);
        ?>
        <form method="post">
        <p>Фамилия<p>
        <input name="familiya">
        <p>Имя<p>
        <input name="name">
        <p>Отчество<p>
        <input name="otchestvo">
        <p>Доп. сведения<p>
        <input name="dop">
        <p>Причина<p>
        <input name="prichina">
        <p>Часы</p>
        <input name="chasi">
         <p> <a href="october.php" > <input type="submit" value="Добавить" name="dob"></a></p></form>
    </body>
</html>
<?php
$familiya=$_POST['familiya'];
$name=$_POST['name'];
$othcestvo=$_POST['otchestvo'];
$dop=$_POST['dop'];
$prichina=$_POST['prichina'];
$chasi=$_POST['chasi'];
$dob=$_POST['dob'];
require_once 'connection.php'; // подключаем скрипт

$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
if(isset($dob)){
    $sql = "INSERT INTO propuski (`ID_prop`, `ID_student`, `ID_zanyatiya`, `prichina`, `poyasnenie`, `dop_svedeniya`, `chasi`) VALUES (NULL, (SELECT ID_student FROM student WHERE student.Familiya='$familiya' and student.Imya='$name' and student.Otchestvo='$othcestvo'), '6', '$prichina', 'нет', '$dop','$chasi')";
$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));



}
