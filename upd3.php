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
        $id_zan=$_POST['id_zan'];//айди студента
        $id_prep=$_POST['id_prep'];//айди группы
        $predmet=$_POST['predmet'];//фамилич
        $date=$_POST['date'];//имя
        $time=$_POST['time'];//отчество
        $mesto=$_POST['mesto'];//отчество
        $upd1=$_POST['upd1'];//кнопка обновить


            require_once("connection5.php");//подключаемся к базе данных через этот файл
            if($connection == false) {//если не подключились то выводи ошибку и выходим из бд
            echo "error";
            echo mysqli_connect_errno();
            exit();
            }
            mysql_connect('localhost','root','');//подключаемся к myadmin
            mysql_select_db('newuvt');






            if(isset($upd1)){
            	if((empty($id_zan))){ echo "Поле ID пустое!";}
            if((empty($id_prep))) {$sql="UPDATE zanyatiya SET predmet='$predmet', data='$data', vremya='$time', mesto='$mesto' WHERE ID_zanyatiya='$id_zan'";
                echo "Обновление успешно1";}//если поле группы пустое
            else if((empty($predmet))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep', data='$data', vremya='$time',mesto='$mesto'  WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно2";}//если поле фамилия пустое
            else if((empty($data))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep', predmet='$predmet', vremya='$time',mesto='$mesto' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно3";}//если поле имя пустое
            else if((empty($time))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep', predmet='$predmet', data='$data',mesto='$mesto' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно4";}//если поле отчество пустое
            else if((empty($mesto))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep', predmet='$predmet', data='$data',vremya='$time' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно4";}//если поле отчество пустое



            if((empty($id_prep)) and (empty($predmet))){$sql="UPDATE zanyatiya SET data='$data',vremya='$time',mesto='$mesto' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно5";}//если поля группы и фамилия пустые
            else if((empty($id_prep)) and (empty($data))){$sql="UPDATE zanyatiya SET predmet='$predmet',vremya='$time',mesto='$mesto' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно6";}//если поле группы и имени пустые
            else if((empty($id_prep)) and (empty($time))){$sql="UPDATE zanyatiya SET predmet='$predmet',data='$data',mesto='$mesto' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно7";}//если поля группы и отчество пустые
            else if((empty($id_prep)) and (empty($mesto))){$sql="UPDATE zanyatiya SET predmet='$predmet',vremya='$time',data='$data' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно8";}//если поля фамилия и имя пустые
            else if((empty($predmet)) and (empty($data))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep', vremya='$time',mesto='$mesto' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно9";}//если поля фамилия и отчество пустые
            else if((empty($predmet)) and (empty($time))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep', data='$data',mesto='$mesto' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($predmet)) and (empty($mesto))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep', data='$data',vremya='$time' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($data)) and (empty($time))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep', mesto='$mesto',predmet='$predmet' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($data)) and (empty($mesto))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep', vremya='$time',predmet='$predmet' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($time)) and (empty($mesto))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep',  data='$data',predmet='$predmet' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые




            if((empty($id_prep)) and (empty($predmet)) and (empty($data))){$sql="UPDATE zanyatiya SET mesto='$mesto',vremya='$time' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно11";}//если поля группы и фамилии и имени пустые
            else if((empty($id_prep)) and (empty($predmet)) and (empty($time))){$sql="UPDATE zanyatiya SET data='$data',mesto='$mesto' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно12";}//если поля группы и фамилии и отчества пустые
            else if((empty($id_prep)) and (empty($predmet)) and (empty($mesto))){$sql="UPDATE zanyatiya SET data='$data',vremya='$time' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно13";}//если поля группы и отчества и имени пустые
            else if((empty($id_prep)) and (empty($data)) and (empty($time))){$sql="UPDATE zanyatiya SET mesto='$mesto',predmet='$predmet' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_prep)) and (empty($data)) and (empty($mesto))){$sql="UPDATE zanyatiya SET vremya='$time',predmet='$predmet' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($predmet)) and (empty($data)) and (empty($time))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep',mesto='$mesto' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($predmet)) and (empty($data)) and (empty($mesto))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep',vremya='$time' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($predmet)) and (empty($time)) and (empty($mesto))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep',data='$data' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($data)) and (empty($time)) and (empty($mesto))){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep',predmet='$predmet' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!



            if((empty($id_prep)) and (empty($predmet)) and (empty($data)) and (empty($time)){$sql="UPDATE zanyatiya SET mesto='$mesto' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_prep)) and (empty($predmet)) and (empty($data)) and (empty($mesto)){$sql="UPDATE zanyatiya SET vremya='$time' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_prep)) and (empty($predmet)) and (empty($time)) and (empty($mesto)){$sql="UPDATE zanyatiya SET data='$data' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_prep)) and (empty($data)) and (empty($time)) and (empty($mesto)){$sql="UPDATE zanyatiya SET predmet='$predmet' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($predmet)) and (empty($data)) and (empty($time)) and (empty($mesto)){$sql="UPDATE zanyatiya SET ID_prepod='$id_prep' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!



            if( (!empty($id_prep)) and (!empty($predmet)) and (!empty($data)) and (!empty($time)) and (!empty($mesto)) ) {$sql="UPDATE zanyatiya SET ID_prepod='$id_prep', predmet='$predmet', data='$data', vremya='$time', mesto='$mesto' WHERE ID_zanyatiya='$id_zan'";
            echo "Обновление успешно15";}

echo "$sql";


            }





         $dobRes=mysql_query("$sql") or die('Запрос не удался: ' . mysql_error());
         $query = "SELECT * FROM student";
         $result = mysql_query("$sql") or die('Запрос не удался: ' . mysql_error());






        ?>

    </body>
</html>
