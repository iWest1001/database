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
        $id_gruppi=$_POST['id_gruppi'];//айди студента
        $id_zan=$_POST['id_zan'];//айди группы
        $id_poses=$_POST['id_poses'];
        $upd1=$_POST['upd1'];//кнопка обновить


            require_once("connection4.php");//подключаемся к базе данных через этот файл
            if($connection == false) {//если не подключились то выводи ошибку и выходим из бд
            echo "error";
            echo mysqli_connect_errno();
            exit();
            }
            mysql_connect('localhost','root','');//подключаемся к myadmin
            mysql_select_db('newuvt');






            if(isset($upd1)){
            	if((empty($id_poses))){ echo "Поле ID пустое!";}
            if((empty($id_gruppi))) {$sql="UPDATE poseshaet SET ID_zanyatiya='$id_zan' WHERE ID_poses='$id_poses'";
                echo "Обновление успешно1";}//если поле группы пустое
            else if((empty($id_zan))){$sql="UPDATE poseshaet SET ID_gruppi='$id_gruppi'WHERE ID_poses='$id_poses'";
            echo "Обновление успешно2";}//если поле фамилия пустое
            else if((!empty($id_gruppi)) and (!empty($id_zan))){$sql="UPDATE poseshaet SET ID_gruppi='$id_gruppi', ID_zanyatiya='$id_zan' WHERE ID_poses='$id_poses'";
            echo "Обновление успешно3";}//если поле имя пустое



}








         $dobRes=mysql_query("$sql") or die('Запрос не удался: ' . mysql_error());
         $query = "SELECT * FROM gruppa";
         $result = mysql_query("$sql") or die('Запрос не удался: ' . mysql_error());






        ?>

    </body>
</html>
