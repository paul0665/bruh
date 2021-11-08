<?php
session_start();
$db_userName = "aaaa";
$db_password = "bbbb";

if (isset($_POST['name']) && isset($_POST['password'])) {
    if ($_POST['name'] == $db_userName && $_POST['password'] == $db_password) {
        header('Location: backend.php');
        $_SESSION['isLogin'] = true;
    } else {
        header('location:login.php?msg=帳號或密碼錯誤');
        $_SESSION['isLogin'] = false;
    }
} else {
    header('location:login.php?msg=帳號或密碼錯誤');
}
