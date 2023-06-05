<?php

/*
db_connect.php
データベース接続情報を記載します
*/

$db_info = [
    "user" => "root",
    "pass" => "",
    "host" => "takano-rds.cutwzi4upm5z.us-west-1.rds.amazonaws.com",
    /*"host" => "localhost",*/
    "dbname" => "team1"
];

// $dsn = データソース名
$dsn = "mysql:host={$db_info['host']}; dbname={$db_info['dbname']}; charset=utf8";

try{
    /* $dbh = データベースハンドル＝データベースに接続する */
    $dbh = new PDO ($dsn, $db_info["user"], $db_info["pass"]);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die ("PDO Error:" . $e->getMessage());
}


?>
