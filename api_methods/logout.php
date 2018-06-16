<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.06.2018
 * Time: 14:05
 */

session_start();
unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
unset($_SESSION['user_mail']);
unset($_SESSION['user_phone']);
session_destroy();

session_start();

header("Location: /home");