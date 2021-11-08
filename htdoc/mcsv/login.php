<?php
session_start();
if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) {
    header('location:backend.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-Hant-TW">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <link rel=stylesheet type="text/css" href="css/nvb.css"/>
    <link rel="stylesheet" type="text/css" href="css/default.css"/>
    <script src="js/resize.js"></script>
    <script src="js/rwd.js"></script>
    <script src="js/TextEffect.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>伺服器狀態</title>
</head>
<body style="background-color: #ffffff;">
<iframe src="head.html"
        onload="this.before((this.contentDocument.body||this.contentDocument));this.remove();myWebSite()"></iframe>

<form action="check.php" method="POST" style="margin-top:210px;text-align: center">
    <div>
        帳號：<input type="text" name="name">
    </div>
    <div>
        密碼：<input type="password" name="password">
    </div>
    <button type="submit">送出</button>
</form>

</body>
</html>
