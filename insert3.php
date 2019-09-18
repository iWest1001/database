<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <form action="ins3.php" method="post">




            <h1>Редактирование</h1>
            <?php include("nav.php"); ?>
            <br> </br> <br> </br>




   <p>Введите id преподавателя</p>
   <p><input name="id_prep"></p>
   <p>Введите предмет</p>
   <p><input name="predmet"></p>
   <p>Введите дату занятия в формате (гггг-мм-чч)</p>
   <p><input name="data"></p>
   <p>Введите время</p>
   <p><input name="time"></p>
   <p>Введите место</p>
   <p><input name="mesto"></p>
   <p> <a href="ins3.php" > <input type="submit" value="Найти"></a></p>
  </form>
    </body>
</html>
