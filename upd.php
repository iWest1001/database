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
        $id=$_POST['id'];//айди студента
        $id_gr=$_POST['id_gr'];//айди группы
        $familiya=$_POST['familiya'];//фамилич
        $name=$_POST['name'];//имя
        $otchestvo=$_POST['otchestvo'];//отчество
        $upd1=$_POST['upd1'];//кнопка обновить


            require_once("connection2.php");//подключаемся к базе данных через этот файл
            if($connection == false) {//если не подключились то выводи ошибку и выходим из бд
            echo "error";
            echo mysqli_connect_errno();
            exit();
            }
            mysql_connect('localhost','root','');//подключаемся к myadmin
            mysql_select_db('newuvt');






            if(isset($upd1)){
            	if((empty($id))){ echo "Поле ID пустое!";}
            if((empty($id_gr))) {$sql="UPDATE student SET Familiya='$familiya', Imya='$name', Otchestvo='$otchestvo' WHERE ID_student='$id'";
                echo "Обновление успешно1";}//если поле группы пустое
            else if((empty($familiya))){$sql="UPDATE student SET ID_gruppi='$id_gr', Imya='$name', Otchestvo='$otchestvo' WHERE ID_student='$id'";
            echo "Обновление успешно2";}//если поле фамилия пустое
            else if((empty($name))){$sql="UPDATE student SET ID_gruppi='$id_gr', Familiya='$familiya', Otchestvo='$otchestvo' WHERE ID_student='$id'";
            echo "Обновление успешно3";}//если поле имя пустое
            else if((empty($otchestvo))){$sql="UPDATE student SET ID_gruppi='$id_gr', Familiya='$familiya', Imya='$name' WHERE ID_student='$id'";
            echo "Обновление успешно4";}//если поле отчество пустое



            if((empty($id_gr)) and (empty($familiya))){$sql="UPDATE student SET Imya='$name', Otchestvo='$otchestvo' WHERE ID_student='$id'";
            echo "Обновление успешно5";}//если поля группы и фамилия пустые
            else if((empty($id_gr)) and (empty($name))){$sql="UPDATE student SET Familiya='$familiya', Otchestvo='$otchestvo' WHERE ID_student='$id'";
            echo "Обновление успешно6";}//если поле группы и имени пустые
            else if((empty($id_gr)) and (empty($otchestvo))){$sql="UPDATE student SET Familiya='$familiya', Imya='$name' WHERE ID_student='$id'";
            echo "Обновление успешно7";}//если поля группы и отчество пустые
            else if((empty($familiya)) and (empty($name))){$sql="UPDATE student SET ID_gruppi='$id_gr', Otchestvo='$otchestvo' WHERE ID_student='$id'";
            echo "Обновление успешно8";}//если поля фамилия и имя пустые
            else if((empty($familiya)) and (empty($otchestvo))){$sql="UPDATE student SET ID_gruppi='$id_gr', Imya='$name' WHERE ID_student='$id'";
            echo "Обновление успешно9";}//если поля фамилия и отчество пустые
            else if((empty($name)) and (empty($otchestvo))){$sql="UPDATE student SET ID_gruppi='$id_gr', Familiya='$familiya' WHERE ID_student='$id'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые



            if((empty($id_gr)) and (empty($familiya)) and (empty($name))){$sql="UPDATE student SET Otchestvo='$otchestvo' WHERE ID_student='$id'";
            echo "Обновление успешно11";}//если поля группы и фамилии и имени пустые
            else if((empty($id_gr)) and (empty($familiya)) and (empty($otchestvo))){$sql="UPDATE student SET Imya='$name' WHERE ID_student='$id'";
            echo "Обновление успешно12";}//если поля группы и фамилии и отчества пустые
            else if((empty($id_gr)) and (empty($otchestvo)) and (empty($name))){$sql="UPDATE student SET Familiya='$familiya' WHERE ID_student='$id'";
            echo "Обновление успешно13";}//если поля группы и отчества и имени пустые
            else if((empty($familiya)) and (empty($otchestvo)) and (empty($name))){$sql="UPDATE student SET ID_gruppi='$id_gr' WHERE ID_student='$id'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!


            if((!empty($id_gr)) and (!empty($familiya)) and (!empty($name)) and (!empty($otchestvo))){$sql="UPDATE student SET Otchestvo='$otchestvo',ID_gruppi='$id_gr',Familiya='$familiya', Imya='$name'  WHERE ID_student='$id'";
            echo "Обновление успешно15";}

echo "$sql";


            }





         $dobRes=mysql_query("$sql") or die('Запрос не удался: ' . mysql_error());
         $query = "SELECT * FROM student";
         $result = mysql_query("$sql") or die('Запрос не удался: ' . mysql_error());






        ?>

    </body>
</html>
