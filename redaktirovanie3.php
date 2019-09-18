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




   <p>Введите id занятия чтобыудалить его</p>
   <p><input name="id_zan"></p>


   <p> <a href="red3.php" > <input type="submit" value="Найти"></a></p>
  </form>

  <?php
  require_once 'connection.php'; // подключаем скрипт

  $link = mysqli_connect($host, $user, $password, $database)
      or die("Ошибка " . mysqli_error($link));
  $query ="SELECT * FROM zanyatiya";


  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  if($result)
  {
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table border=1><tr><th>id занятия</th><th>id преподавателя</th><th>Предмет</th><th>Дата</th><th>Время</th><th>Место</th></tr>";
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

    </body>
</html>
