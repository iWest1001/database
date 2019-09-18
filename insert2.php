<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <form action="ins2.php" method="post">




            <h1>Редактирование</h1>
            <?php include("nav.php"); ?>
            <br> </br> <br> </br>




   <p>ID группы</p>
   <p><input name="id_gruppi"></p>
   <p>ID занятия</p>
   <p><input name="id_zan"></p>
   <p> <a href="ins2.php" > <input type="submit" value="Добавить"></a></p>
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

  $query ="SELECT * FROM gruppa";


  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  if($result)
  {
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table border=1><tr><th>id группы</th><th>Направление</th><th>Код нправления</th><th>Подгруппа</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

    // очищаем результат
    mysqli_free_result($result);
  }

  $query ="SELECT * FROM prepodavatel";

  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  if($result)
  {
      $rows = mysqli_num_rows($result); // количество полученных строк

      echo "<table border=1><tr><th>id Преподавателя</th><th>Фамилия</th><th>Имя</th><th>Отчество</th></tr>";
      for ($i = 0 ; $i < $rows ; ++$i)
      {
          $row = mysqli_fetch_row($result);
          echo "<tr>";
              for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
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
