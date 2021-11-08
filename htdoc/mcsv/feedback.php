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
    <form action="feedbackResponse.php" method="post" style="width: 100%;text-align: left;">
        標題主旨：<input type="text" name="title"><br>
        您的信箱：<input type="email" name="email"><br>
        問題分類：
        <?php
        $bruhlist = array(
            "遊戲伺服器", "RVN節點", "防火牆", "CL伺服器", "YTDL代理", "VPN", "虛擬機"
        );
        foreach ($bruhlist as $stuff): ?>
        <br>
            <input type="checkbox" name="question[]" value="<?php echo $stuff; ?>">
            <label for="cbox1"><?php echo $stuff; ?></label>
        <?php endforeach ?>
        <br>
        <a style="text-align: center">問題內容：</a>
        <br>
        <textarea name="content" style="text-align: center;width: 100%;height: 100px"></textarea>
        <br>
        <br>
        <input type="submit" value="提交" style="text-align: center;margin-left: 40%;margin-right: 40%">
    </form>
</div>

</body>
</html>
