<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <form action="red.php" method="post">




            <h1>Редактирование</h1>
            <?php include("nav.php"); ?>
            <br> </br> <br> </br>




   <p>Введите фамилию студента чтобы удалить его</p>
   <p><input name="student_name"></p>
   <p>Введите имя </p>
   <p><input name="student_name2"></p>
   <p>Введите Отчество</p>
   <p><input name="student_name3"></p>

   <p> <a href="red.php" > <input type="submit" value="Найти"></a></p>
  </form>
    </body>
</html>
