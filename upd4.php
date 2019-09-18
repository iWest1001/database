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
        $id_student=$_POST['id_student'];//айди группы
        $id_prop=$_POST['id_prop'];
        $prichina=$_POST['prichina'];//фамилич
        $poyasnenie=$_POST['poyasnenie'];//имя
        $dop=$_POST['dop'];//отчество
        $chasi=$_POST['chasi'];//отчество
        $upd1=$_POST['upd1'];//кнопка обновить


            require_once("connection6.php");//подключаемся к базе данных через этот файл
            if($connection == false) {//если не подключились то выводи ошибку и выходим из бд
            echo "error";
            echo mysqli_connect_errno();
            exit();
            }
            mysql_connect('localhost','root','');//подключаемся к myadmin
            mysql_select_db('newuvt');






            if(isset($upd1)){
            	if((empty($id_prop))){ echo "Поле ID пустое!";}
            if((empty($id_student))) {$sql="UPDATE propuski SET ID_zanyatiya='$id_zan', prichina='$prichina', poyasnenie='$poyasnenie', dop_svedeniya='$dop', chasi='$chasi' WHERE ID_prop='$id_prop'";
                echo "Обновление успешно1";}//если поле группы пустое
            else if((empty($id_zan))){$sql="UPDATE propuski SET ID_student='$id_student', prichina='$prichina', poyasnenie='$poyasnenie', dop_svedeniya='$dop', chasi='$chasi'  WHERE ID_prop='$id_prop'";
            echo "Обновление успешно2";}//если поле фамилия пустое
            else if((empty($prichina))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', poyasnenie='$poyasnenie', dop_svedeniya='$dop', chasi='$chasi'  WHERE ID_prop='$id_prop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно3";}//если поле имя пустое
            else if((empty($poyasnenie))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', prichina='$prichina', dop_svedeniya='$dop', chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно4";}//если поле отчество пустое
            else if((empty($dop))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', prichina='$prichina', poyasnenie='$poyasnenie', chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно4";}//если поле отчество пустое
            else if((empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', prichina='$prichina', poyasnenie='$poyasnenie', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно4";}//если поле отчество пустое



            if((empty($id_student)) and (empty($id_zan))){$sql="UPDATE propuski SET prichina='$prichina', poyasnenie='$poyasnenie', dop_svedeniya='$dop',chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно5";}//если поля группы и фамилия пустые
            else if((empty($id_student)) and (empty($prichina))){$sql="UPDATE propuski SET ID_zanyatiya='$id_zan', poyasnenie='$poyasnenie', dop_svedeniya='$dop',chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно6";}//если поле группы и имени пустые
            else if((empty($id_student)) and (empty($poyasnenie))){$sql="UPDATE propuski SET ID_zanyatiya='$id_zan', prichina='$prichina', dop_svedeniya='$dop',chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно7";}//если поля группы и отчество пустые
            else if((empty($id_student)) and (empty($dop))){$sql="UPDATE propuski SET ID_zanyatiya='$id_zan', prichina='$prichina', poyasnenie='$poyasnenie',chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно8";}//если поля фамилия и имя пустые
            else if((empty($id_student)) and (empty($chasi))){$sql="UPDATE propuski SET ID_zanyatiya='$id_zan', prichina='$prichina', poyasnenie='$poyasnenie',dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно9";}//если поля фамилия и отчество пустые
            else if((empty($id_zan)) and (empty($prichina))){$sql="UPDATE propuski SET ID_student='$id_student', poyasnenie='$poyasnenie', chasi='$chasi', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($id_zan)) and (empty($poyasnenie))){$sql="UPDATE propuski SET ID_student='$id_student', prichina='$prichina', chasi='$chasi', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($id_zan)) and (empty($dop))){$sql="UPDATE propuski SET ID_student='$id_student', prichina='$prichina', chasi='$chasi', poyasnenie='$poyasnenie' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($id_zan)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', prichina='$prichina', dop_svedeniya='$dop', poyasnenie='$poyasnenie' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($prichina)) and (empty($poyasnenie))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', chasi='$chasi', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($prichina)) and (empty($dop))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', chasi='$chasi', poyasnenie='$poyasnenie' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($prichina)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', dop_svedeniya='$dop', poyasnenie='$poyasnenie' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($poyasnenie)) and (empty($dop))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', prichina='$prichina', chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($poyasnenie)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', prichina='$prichina', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые
            else if((empty($dop)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', prichina='$prichina', poyasnenie='$poyasnenie' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно10";}//если поля фамилия и отчество пустые




            if((empty($id_student)) and (empty($id_zan)) and (empty($prichina))){$sql="UPDATE propuski SET chasi='$chasi', dop_svedeniya='$dop', poyasnenie='$poyasnenie' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно11";}//если поля группы и фамилии и имени пустые
            else if((empty($id_student)) and (empty($id_zan)) and (empty($poyasnenie))){$sql="UPDATE propuski SET prichina='$prichina', chasi='$chasi', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно12";}//если поля группы и фамилии и отчества пустые
            else if((empty($id_student)) and (empty($id_zan)) and (empty($dop))){$sql="UPDATE propuski SET prichina='$prichina', chasi='$chasi', poyasnenie='$poyasnenie' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно13";}//если поля группы и отчества и имени пустые
            else if((empty($id_student)) and (empty($id_zan)) and (empty($chasi))){$sql="UPDATE propuski SET prichina='$prichina', poyasnenie='$poyasnenie', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($prichina)) and (empty($poyasnenie))){$sql="UPDATE propuski SET chasi='$chasi', dop_svedeniya='$dop', ID_zanyatiya='$id_zan' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($prichina)) and (empty($dop))){$sql="UPDATE propuski SET ID_zanyatiya='$id_zan', poyasnenie='$poyasnenie', chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($prichina)) and (empty($chasi))){$sql="UPDATE propuski SET ID_zanyatiya='$id_zan', poyasnenie='$poyasnenie', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($poyasnenie)) and (empty($dop))){$sql="UPDATE propuski SET ID_zanyatiya='$id_zan', prichina='$prichina', chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($poyasnenie)) and (empty($chasi))){$sql="UPDATE propuski SET ID_zanyatiya='$id_zan', prichina='$prichina', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($dop)) and (empty($chasi))){$sql="UPDATE propuski SET ID_zanyatiya='$id_zan', prichina='$prichina', poyasnenie='$poyasnenie' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_zan)) and (empty($prichina)) and (empty($poyasnenie))){$sql="UPDATE propuski SET ID_student='$id_student', dop_svedeniya='$dop', chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_zan)) and (empty($prichina)) and (empty($dop))){$sql="UPDATE propuski SET ID_student='$id_student', poyasnenie='$poyasnenie', chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_zan)) and (empty($prichina)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', poyasnenie='$poyasnenie', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_zan)) and (empty($poyasnenie)) and (empty($dop))){$sql="UPDATE propuski SET ID_student='$id_student', chasi='$chasi', prichina='$prichina' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_zan)) and (empty($poyasnenie)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', dop_svedeniya='$dop', prichina='$prichina' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_zan)) and (empty($dop)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', poyasnenie='$poyasnenie', prichina='$prichina' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($prichina)) and (empty($poyasnenie)) and (empty($dop))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($prichina)) and (empty($poyasnenie)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($prichina)) and (empty($dop)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', poyasnenie='$poyasnenie' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($poyasnenie)) and (empty($dop)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', prichina='$prichina' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!



            if((empty($id_student)) and (empty($id_zan)) and (empty($prichina)) and (empty($poyasnenie))){$sql="UPDATE propuski SET dop_svedeniya='$dop', chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($id_zan)) and (empty($prichina)) and (empty($dop))){$sql="UPDATE propuski SET poyasnenie='$poyasnenie', chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($id_zan)) and (empty($prichina)) and (empty($chasi))){$sql="UPDATE propuski SET poyasnenie='$poyasnenie', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($id_zan)) and (empty($poyasnenie)) and (empty($dop))){$sql="UPDATE propuski SET prichina='$prichina', chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($id_zan)) and (empty($poyasnenie)) and (empty($chasi))){$sql="UPDATE propuski SET prichina='$prichina', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($id_zan)) and (empty($dop)) and (empty($chasi))){$sql="UPDATE propuski SET prichina='$prichina', poyasnenie='$poyasnenie' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_zan)) and (empty($prichina)) and (empty($poyasnenie)) and (empty($dop))){$sql="UPDATE propuski SET ID_student='$id_student',chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_zan)) and (empty($prichina)) and (empty($poyasnenie)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_zan)) and (empty($prichina)) and (empty($dop)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', poyasnenie='$poyasnenie' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_zan)) and (empty($poyasnenie)) and (empty($dop)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', prichina='$prichina' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if( (empty($prichina)) and (empty($poyasnenie)) and (empty($dop)) and (empty($chasi))){$sql="UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!





            if((empty($id_student)) and (empty($id_zan)) and (empty($prichina)) and (empty($poyasnenie)) and (empty($dop)) ){$sql="UPDATE propuski SET chasi='$chasi' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($id_zan)) and (empty($prichina)) and (empty($poyasnenie)) and (empty($chasi)) ){$sql="UPDATE propuski SET dop_svedeniya='$dop' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($id_zan)) and (empty($prichina)) and (empty($dop)) and (empty($chasi)) ){$sql="UPDATE propuski SET poyasnenie='$poyasnenie' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if((empty($id_student)) and (empty($prichina)) and (empty($poyasnenie)) and (empty($dop)) and (empty($chasi)) ){$sql="UPDATE propuski SET ID_zanyatiya='$id_zan' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!
            else if( (empty($id_zan)) and (empty($prichina)) and (empty($poyasnenie)) and (empty($dop)) and (empty($chasi)) ){$sql="UPDATE propuski SET ID_student='$id_student' WHERE ID_prop='$id_prop'";
            echo "Обновление успешно14";}//если поля фамилии и отчества и имени пустые!!!!!!



            if( (!empty($id_student)) and (!empty($id_zan)) and (!empty($prichina)) and (!empty($poyasnenie)) and (!empty($dop)) and (!empty($chasi)) ) {$sql = "UPDATE propuski SET ID_student='$id_student', ID_zanyatiya='$id_zan', prichina='$prichina', poyasnenie='$poyasnenie', dop_svedeniya='$dop', chasi='$chasi' WHERE ID_prop='$id_prop'";
            }

echo "$sql";


            }





         $dobRes=mysql_query("$sql") or die('Запрос не удался: ' . mysql_error());
         $query = "SELECT * FROM student";
         $result = mysql_query("$sql") or die('Запрос не удался: ' . mysql_error());






        ?>

    </body>
</html>
