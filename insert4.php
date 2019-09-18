<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <form action="ins4.php" method="post">




            <h1>Редактирование</h1>
            <?php include("nav.php"); ?>
            <br> </br> <br> </br>




   <p>Введите id студента</p>
   <p><input name="id_student"></p>
   <p>Введите id занятия</p>
   <p><input name="id_zan"></p>
   <p>По какой причине пропуск(ув/не ув)</p>
   <p><input name="prichina"></p>
   <p>Пояснение причины</p>
   <p><input name="poyasnenie"></p>
   <p>Дополнительные сведения</p>
   <p><input name="dop"></p>
   <p>Введите пропущенные часы</p>
   <p><input name="chasi"></p>
   <p> <a href="ins4.php" > <input type="submit" value="Найти"></a></p>
  </form>
    </body>
</html>
