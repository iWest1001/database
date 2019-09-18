<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <form action="otchet2.php" method="post">


            <h1>ПОИСК ЗАДОЛЖЕННОСТИ СТУДЕНТА</h1>
            <?php include("nav.php"); ?>
            <br> </br> <br> </br>





   <p>Введите направление</p>
   <p><input name="napravlenie"></p>
   <p>Введите код группы</p>
   <p><input name="gruppa"></p>
   <p> <a href="otchet2.php" > <input type="submit" value="Найти"></a></p>
  </form>
    </body>
</html>
