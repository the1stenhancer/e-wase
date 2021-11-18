<?php
    $serverName = "localhost";
    $dbname = "ewase";
    $user = "ewase";
    $pass = "ewase";
    $chrs = "utf8mb4";
    $attr = "mysql:host=${serverName};dbname=${dbname};charset=${chrs}";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
?>