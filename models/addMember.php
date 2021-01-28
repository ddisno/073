<?php

    require "../modules/conDB.php ";

    echo $email = $_POST['email'];

    try{
        $mysqli->autocommit(false);
        $sql = "INSERT INTO tb_member 
                VALUES ('$email', '', '', 0)";
        $mysqli->query($sql);
        $sql = "UPDATE tb_member 
                SET `name`='KAK', year = 2000
                WHERE email = '$email";
        $mysqli->commit();
    }catch(Exception $e){
        $e->getMessage();
    }
?>
