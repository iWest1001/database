<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <form action="upd3.php" method="post">




            <h1>Редактирование</h1>
            <?php include("nav.php"); ?>
            <br> </br> <br> </br>




   <p>Введите id занятия чтобы изменить нужное</p>
   <p><input name="id_zan"></p>
   <p>Введите id преподавателя</p>
   <p><input name="id_prep"></p>
   <p>Введите предмет</p>
   <p><input name="predmet"></p>
   <p>Введите дату в формате(гггг-мм-дд)</p>
   <p><input name="date"></p>
   <p>Введите время</p>
   <p><input name="time"></p>
   <p>Введите место</p>
   <p><input name="mesto"></p>
    <p> <a href="upd3.php" > <input type="submit" value="Обновить" name="upd1"></a></p>
   <?php
   require_once 'connection.php'; // подключаем скрипт

   $link = mysqli_connect($host, $user, $password, $database)
       or die("Ошибка " . mysqli_error($link));

   $query ="SELECT * FROM zanyatiya";

   $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
   if($result)
   {
       $rows = mysqli_num_rows($result); // количество полученных строк

       echo "<table border=1><tr><th>id предмета</th><th>id преподавателя</th><th>Предмет</th><th>Дата</th><th>Время</th><th>Место</th></tr>";
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
