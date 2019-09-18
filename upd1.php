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
        $id=$_POST['ID_gruppi'];//айди студента
        $napravlenie=$_POST['napravlenie'];//айди группы
        $kod=$_POST['kod_naprav'];//фамилич
        $podgruppa=$_POST['podgruppa'];//имя
        $upd1=$_POST['upd1'];//кнопка обновить


            require_once("connection3.php");//подключаемся к базе данных через этот файл
            if($connection == false) {//если не подключились то выводи ошибку и выходим из бд
            echo "error";
            echo mysqli_connect_errno();
            exit();
            }
            mysql_connect('localhost','root','');//подключаемся к myadmin
            mysql_select_db('newuvt');






            if(isset($upd1)){
            	if((empty($id))){ echo "Поле ID пустое!";}
            if((empty($napravlenie))) {$sql="UPDATE gruppa SET kod_naprav='$kod', podgruppa='$podgruppa' WHERE ID_gruppi='$id'";
                echo "Обновление успешно1";}//если поле группы пустое
            else if((empty($kod))){$sql="UPDATE gruppa SET napravlenie='$napravlenie', podgruppa='$podgruppa' WHERE ID_gruppi='$id'";
            echo "Обновление успешно2";}//если поле фамилия пустое
            else if((empty($podgruppa))){$sql="UPDATE gruppa SET napravlenie='$napravlenie', kod_naprav='$kod' WHERE ID_gruppi='$id'";
            echo "Обновление успешно3";}//если поле имя пустое




            if((empty($kod)) and (empty($napravlenie))){$sql="UPDATE gruppa SET podgruppa='$podgruppa' WHERE ID_gruppi='$id'";
            echo "Обновление успешно5";}//если поля группы и фамилия пустые
            else if((empty($napravlenie)) and (empty($podgruppa))){$sql="UPDATE gruppa SET kod_naprav='$kod' WHERE ID_gruppi='$id'";
            echo "Обновление успешно6";}//если поле группы и имени пустые
            else if((empty($kod)) and (empty($podgruppa))){$sql="UPDATE gruppa SET napravlenie='$napravlenie' WHERE ID_gruppi='$id'";
            echo "Обновление успешно7";}//если поля группы и






            if((!empty($napravlenie)) and (!empty($kod_naprav)) and (!empty($podgruppa)) ){$sql="UPDATE gruppa SET napravlenie='$napravlenie',kod_naprav='$kod',podgpodgruppa='$podgruppa' WHERE ID_gruppi='$id'";
            echo "Обновление успешно15";}

echo "$sql";


            }





         $dobRes=mysql_query("$sql") or die('Запрос не удался: ' . mysql_error());
         $query = "SELECT * FROM gruppa";
         $result = mysql_query("$sql") or die('Запрос не удался: ' . mysql_error());






        ?>

    </body>
</html>
