<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.06.2018
 * Time: 11:16
 */

$db;

try {
    require './config.php';

    $db = new PDO("mysql:host={$config_db['host']};dbname={$config_db['database']};charset=utf8", $config_db['user'], $config_db['pass'], [
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo $e;
    exit('Database error');
}

function connectWithDBAndGetResponse($query, $params, $values, $types)
{
    global $db;
    $req = $db -> prepare($query);
    if (!empty($values)) {
        $i = 0;
        foreach ($values as $value)
            $req ->bindValue($params[$i], $value, $types[$i]);
    }

    $req -> execute();
    return $req -> fetchAll();
}

function connectWithDBAndQuery($query)
{
    global $db;
    $db -> query($query);
}