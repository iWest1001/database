<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <form action="red2.php" method="post">




            <h1>Редактирование</h1>
            <?php include("nav.php"); ?>
            <br> </br> <br> </br>




   <p>Введите ID группы чтобы удалить его</p>
   <p><input name="id_gruppi"></p>
   <p>Введите ID занятия </p>
   <p><input name="id_zan"></p>

   <p> <a href="red2.php" > <input type="submit" value="Удалить"></a></p>
  </form>
  <?php
  require_once 'connection.php'; // подключаем скрипт

  $link = mysqli_connect($host, $user, $password, $database)
      or die("Ошибка " . mysqli_error($link));
  $query ="SELECT * FROM poseshaet";


  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  if($result)
  {
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table border=1><tr><th>id группы</th><th>id занятия</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td>$row[$j]</td>";
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
