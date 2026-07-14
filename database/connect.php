<?php

function connect()
{
    require __DIR__ . "/config.php";
    try {
        //code...
        $conn = new PDO("mysql:host=$servername;databasename=$databasename;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (\Throwable $th) {
        //throw $th;
        echo "Connection failed: " . $th->getMessage();
    }
}