<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <form action="red1.php" method="post">




            <h1>Редактирование</h1>
            <?php include("nav.php"); ?>
            <br> </br> <br> </br>




   <p>Введите направление чтобы удалить его</p>
   <p><input name="napravlenie"></p>
   <p>Введите код направления </p>
   <p><input name="kod_naprav"></p>
   <p>Введите подгруппу</p>
   <p><input name="podgruppa"></p>

   <p> <a href="red1.php" > <input type="submit" value="Удалить"></a></p>
  </form>
    </body>
</html>
