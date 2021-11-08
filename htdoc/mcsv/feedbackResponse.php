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

    <title>故障回報</title>
</head>
<body style="background-color: #ffffff;">

<iframe src="head.html"
        onload="this.before((this.contentDocument.body||this.contentDocument));this.remove();myWebSite()"></iframe>

<div style="margin-left: 40%;margin-right: 40%;width: 20%;margin-top:210px;text-align: center;">
    我們已收到您的報告,感謝您的回報
    <br>
    <br>
    原始內容
    <br>
    標題主旨：&nbsp<?php echo $_POST["title"]; ?><br>
    您的信箱：&nbsp<?php echo $_POST["email"]; ?><br>
    問題分類：&nbsp
    <?php
    if(!empty($_POST['question']))
        foreach($_POST['question'] as $stuff) {
            echo $stuff;echo ",";
        }
    ?>
    <br>
    問題內容：&nbsp<?php echo $_POST["content"]; ?>
</div>

</body>
</html>
