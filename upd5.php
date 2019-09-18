<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <h1>Редактирование</h1>
        <?php include("nav.php"); ?>
        <br> </br> <br> </br>


        <?php
        $id=$_POST['id_prep'];//айди студента
        $familiya=$_POST['familiya'];//айди группы
        $name=$_POST['name'];//фамилич
        $otchestvo=$_POST['otchestvo'];//имя
        $upd1=$_POST['upd1'];//кнопка обновить


            require_once("connection7.php");//подключаемся к базе данных через этот файл
            if($connection == false) {//если не подключились то выводи ошибку и выходим из бд
            echo "error";
            echo mysqli_connect_errno();
            exit();
            }
            mysql_connect('localhost','root','');//подключаемся к myadmin
            mysql_select_db('newuvt');






            if(isset($upd1)){
            	if((empty($id))){ echo "Поле ID пустое!";}
            if((empty($familiya))) {$sql="UPDATE prepodavatel SET Imya='$name', Otchestvo='$otchestvo' WHERE ID_prep='$id'";
                echo "Обновление успешно1";}//если поле группы пустое
            else if((empty($name))){$sql="UPDATE prepodavatel SET Familiya='$familiya', Otchestvo='$otchestvo' WHERE ID_prep='$id'";
            echo "Обновление успешно2";}//если поле фамилия пустое
            else if((empty($otchestvo))){$sql="UPDATE prepodavatel SET Familiya='$familiya', Imya='$name' WHERE ID_prep='$id'";
            echo "Обновление успешно3";}//если поле имя пустое




            if((empty($name)) and (empty($familiya))){$sql="UPDATE prepodavatel SET Otchestvo='$otchestvo' WHERE ID_prep='$id'";
            echo "Обновление успешно5";}//если поля группы и фамилия пустые
            else if((empty($familiya)) and (empty($otchestvo))){$sql="UPDATE prepodavatel SET Imya='$name' WHERE ID_prep='$id'";
            echo "Обновление успешно6";}//если поле группы и имени пустые
            else if((empty($name)) and (empty($otchestvo))){$sql="UPDATE prepodavatel SET Familiya='$familiya' WHERE ID_prep='$id'";
            echo "Обновление успешно7";}//если поля группы и






            if((!empty($familiya)) and (!empty($Imya)) and (!empty($otchestvo)) ){$sql="UPDATE prepodavatel SET Familiya='$familiya',Imya='$name',Otchestvo='$otchestvo' WHERE ID_prep='$id'";
            echo "Обновление успешно15";}

echo "$sql";


            }





         $dobRes=mysql_query("$sql") or die('Запрос не удался: ' . mysql_error());
         $query = "SELECT * FROM prepodavatel";
         $result = mysql_query("$sql") or die('Запрос не удался: ' . mysql_error());






        ?>

    </body>
</html>
