<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.06.2018
 * Time: 23:57
 */

if (isset($_POST['uname'])) {
    require './database.php';

    $pass = password_hash($_POST['psw'], PASSWORD_DEFAULT );
    $time = time();

    connectWithDBAndGetResponse(
        "INSERT INTO `users` (nickname, pass, email, created) VALUES ( :uname, :pass, :mail, :tim )",
        array(":uname", ":pass", ":mail", ":tim"),
        array($_POST['uname'], $pass, $_POST['email'], $time),
        [PDO::PARAM_STR, PDO::PARAM_STR, PDO::PARAM_STR, PDO::PARAM_STR]
    );

    header("Location: /home");
}
