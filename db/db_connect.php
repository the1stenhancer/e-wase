<?php
    require_once("login.php");

    try{
        $pdo = new PDO($attr,$user,$pass,$opt);
    }
    catch(PDOException $e){
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    function test_vars($data)
    {
        $data1 = trim($data);
        $data2 = stripslashes($data1);
        $data3 = htmlspecialchars($data2);
        return $data3;
    }
?>