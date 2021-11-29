<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/ewase/db/db_connect.php");

    //$host,$user,$pass are already present in db_connect.php

    //api_key_value from both ESP32 need to match the ones below
    $api_key_value1 = "";
    $api_key1;
    // $api_key_value2 = "";
    // $api_key2;

    //checking request method using the $_SERVER['REQUEST_METHOD'] superglobal
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //check whether keys are part of the http post, store them and insert the data
        if(isset($_POST["api_key1"]))
        {
            $api_key1 = test_vars($_POST["api_key1"]);

            if($api_key_value1 === $api_key1)
            {
                //$pdo from db_connect.php
                $r = insert_data($pdo, $_POST["ph1"], $_POST["turbidity1"], $_POST['do1'], $_POST['conductivity1'], $_POST['temperature1'], $_POST['vowt1'], $_POST['esp_num1']);
                if(isset($r))
                {
                    echo "<em style='color: #fff;'>[ESP32 #1] Readings inserted successfully.</em>";
                }
                else 
                {
                    echo "<em style='color: red;'>[ESP32 #1] An error occurred during insertion.</em>";
                }
            }
            else
            {
                echo "<em style='color: red;'>[ESP32 #1] Keys didn't match! Readings not inserted.</em>";
            }
        }

        if(isset($_POST["api_key2"]))
        {
            $api_key2 = test_vars($_POST["api_key2"]);

            if($api_key_value2 === $api_key2)
            {
                //$pdo from db_connect.php
                $r = insert_data($pdo, $_POST["ph2"], $_POST["turbidity2"], $_POST['do2'], $_POST['conductivity2'], $_POST['temperature2'], $_POST['vowt2'], $_POST['esp_num2']);
                if(isset($r))
                {
                    echo "<em style='color: #fff;'>[ESP32 #2] Readings inserted successfully.</em>";
                }
                else 
                {
                    echo "<em style='color: red;'>[ESP32 #2] An error occurred during insertion.</em>";
                }
            }
            else
            {
                echo "<em style='color: red;'>[ESP32 #2] Keys didn't match! Readings not inserted.</em>";
            }
        }
    }
    else
    {
        echo "<em style='color: #fff;'>[No data posted by [ESP32 #1] or [ESP32 #2].</em>";
    }

    function insert_data($pdo,$ph,$tur,$do,$cond,$temp,$vowt,$esp_num)
    {
        $c_ph = test_vars($ph);
        $c_tur = test_vars($tur);
        $c_do = test_vars($do);
        $c_cond = test_vars($cond);
        $c_temp = test_vars($temp);
        $c_vowt = test_vars($vowt);
        $c_esp_num = test_vars($esp_num);

        //query for inserting readings of the first esp32
        $query = <<<_INSERT
        INSERT INTO ewase (ph,turbidity,dissolved_oxygen,conductivity,temperature,vowt,esp_number) 
        VALUES (${c_ph},${c_tur},${c_do},${c_cond},${c_temp},${c_vowt},${c_esp_num})
        _INSERT;

        //Executing the query using pdo instance
        $result = $pdo->query($query);

        return $result;
    }