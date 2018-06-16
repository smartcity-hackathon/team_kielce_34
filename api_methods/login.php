<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.06.2018
 * Time: 13:07
 */

session_start();

require_once './config.php';
require_once './database.php';

if ( isset($_POST['uname']) && isset($_POST['psw'])) {
    $query = $db->prepare("SELECT * FROM users WHERE nickname=:nick");
    $query->bindValue(":nick", $_POST['username']);
    $query->execute();

    $result = $query->fetch();

    if ( $result && password_verify($_POST['password'], $result['u_pass']) ) {
        $_SESSION['user_id'] = $result['u_id'];
        $_SESSION['user_name'] = $result['nickname'];
        $_SESSION['user_mail'] = $result['email'];
        $_SESSION['user_phone'] = $result['phone'];

        header("Location: /index.php");
		exit();
    } else {
		$_SESSION['un_rem'] = $_POST['uname'];
        $_SESSION['failed_login'] = true;
        header("Location: /login.php");
		exit();
    }  
}