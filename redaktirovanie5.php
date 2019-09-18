<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <form action="red5.php" method="post">




            <h1>Редактирование</h1>
            <?php include("nav.php"); ?>
            <br> </br> <br> </br>




   <p>Введите фамилию преподавателя чтобы удалить его</p>
   <p><input name="familiya"></p>
   <p>Введите имя </p>
   <p><input name="name"></p>
   <p>Введите отчество</p>
   <p><input name="otchestvo"></p>

   <p> <a href="red5.php" > <input type="submit" value="Удалить"></a></p>
  </form>
    </body>
</html>
