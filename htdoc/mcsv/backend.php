<?php session_start(); ?>
<?php if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) : ?>

<?php else :
    header('Location: login.php');
?>
<?php endif ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>伺服器狀態</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <link rel=stylesheet type="text/css" href="css/nvb.css">
    <link rel=stylesheet type="text/css" href="css/serverstatus.css">
    <script src="js/resize.js"></script>
    <script src="js/rwd.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-color: #ffffff;">
<iframe src="head.html"
        onload="this.before((this.contentDocument.body||this.contentDocument));this.remove();myWebSite()"></iframe>

<div style="margin-left: 10%;margin-right: 10%;width: 80%;margin-top:210px;text-align: center;">
    <div style="width: 100%;text-align: center;font-size: 40px;display: ">
        <h1>歡迎登入</h1>
        <p><a href="logout.php">登出</a></p>
    </div>
    <div class="cards" style="text-align: center">
        <p>goodtime伺服器</p>
        <p>goodtime Main server</p>
        <p> status: <img src="https://goodtime.chiliasmstudio.com/online.png" alt="status" onerror="this.src='img/offline.png'" /></p>
    </div>
    <div class="cards" style="text-align: center">
        <p>MISF 主機1</p>
        <p>MISF Server1</p>
        <p> status: <img src="https://www.chiliasmstudio.com/img/online.png" alt="status" onerror="this.src='img/offline.png'" /></p>
    </div>
    <div class="cards" style="text-align: center">
        <p>MISF 主資料庫</p>
        <p>MISF Main database</p>
        <p> status: <img src="https://www.chiliasmstudio.com/img/online.png" alt="status" onerror="this.src='img/offline.png'" /></p>
    </div>
    <div class="cards" style="text-align: center">
        <p>OVH防火牆 加拿大 蒙特雷吉1</p>
        <p>OVH Firewall Canada Beauharnois1</p>
        <p> status: <img src="https://ssl-ova-vps-beauharnois-1.chiliasmstudio.com/online.png" alt="status" onerror="this.src='img/offline.png'" /></p>
    </div>
    <div class="cards" style="text-align: center">
        <p>OVH防火牆 新加坡1</p>
        <p>OVH Firewall Singapore1</p>
        <p> status: <img src="https://ssl-vps-sg1.chiliasmstudio.com/online.png" alt="status" onerror="this.src='img/offline.png'" /></p>
    </div>
    <div class="cards" style="text-align: center">
        <p>OVH防火牆 新加坡2</p>
        <p>OVH Firewall Singapore2</p>
        <p> status: <img src="https://ssl-vps-sg2.chiliasmstudio.com/online.png" alt="status" onerror="this.src='img/offline.png'" /></p>
    </div>
</div>

</div>
</body>
</html>