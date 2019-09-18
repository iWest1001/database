<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <form action="upd1.php" method="post">




            <h1>Редактирование</h1>
            <?php include("nav.php"); ?>
            <br> </br> <br> </br>




   <p>Введите id группы</p>
   <p><input name="ID_gruppi"></p>
   <p>Введите название направления</p>
   <p><input name="napravlenie"></p>
   <p>Введите код группы</p>
   <p><input name="kod_naprav"></p>
   <p>Введите подгруппу</p>
   <p><input name="podgruppa"></p>
    <p> <a href="upd1.php" > <input type="submit" value="Обновить" name="upd1"></a></p>
   <?php
   require_once 'connection3.php'; // подключаем скрипт

   $link = mysqli_connect($host, $user, $password, $database)
       or die("Ошибка " . mysqli_error($link));

   $query ="SELECT * FROM gruppa";

   $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   if($result)
   {
       $rows = mysqli_num_rows($result); // количество полученных строк

       echo "<table border=1><tr><th>id группы</th><th>направление</th><th>код направления</th><th>подгруппа</th></tr>";
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


  </form>
    </body>
</html>
