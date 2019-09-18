<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <form action="upd5.php" method="post">




            <h1>Редактирование</h1>
            <?php include("nav.php"); ?>
            <br> </br> <br> </br>




   <p>Введите id преподавателя</p>
   <p><input name="id_prep"></p>
   <p>Введите Фамилию</p>
   <p><input name="familiya"></p>
   <p>Введите имя</p>
   <p><input name="name"></p>
   <p>Введите отчество</p>
   <p><input name="otchestvo"></p>
    <p> <a href="upd5.php" > <input type="submit" value="Обновить" name="upd1"></a></p>
   <?php
   require_once 'connection7.php'; // подключаем скрипт

   $link = mysqli_connect($host, $user, $password, $database)
       or die("Ошибка " . mysqli_error($link));

   $query ="SELECT * FROM prepodavatel";

   $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   if($result)
   {
       $rows = mysqli_num_rows($result); // количество полученных строк

       echo "<table border=1><tr><th>id преподавателя</th><th>Фамилия</th><th>Имя</th><th>Отчество</th></tr>";
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
