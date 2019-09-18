<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <form action="red3.php" method="post">




            <h1>Редактирование</h1>
            <?php include("nav.php"); ?>
            <br> </br> <br> </br>




   <p>Введите id пропуска чтобы удалить его</p>
   <p><input name="id_prop"></p>


   <p> <a href="red4.php" > <input type="submit" value="Найти"></a></p>
  </form>

  <?php
  require_once 'connection.php'; // подключаем скрипт

  $link = mysqli_connect($host, $user, $password, $database)
      or die("Ошибка " . mysqli_error($link));
  $query ="SELECT * FROM propuski";


  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  if($result)
  {
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table border=1><tr><th>id пропуска</th><th>id студента</th><th>id занятия</th><th>Причина пропуска</th><th>Пояснение</th><th>Доп. сведения</th><th>Пропущенные часы</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 7 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

    // очищаем результат
    mysqli_free_result($result);
  }

  $query ="SELECT * FROM student";


  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  if($result)
  {
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table border=1><tr><th>id студента</th><th>id группы</th><th>Фамилия</th><th>Имя</th><th>Отчество</th></tr>";
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
