<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Burh.net</title>
</head>
<body>

<?php
echo 'Hello world<br>';
?>
<form action="welcome.php" method="post">
    標題主旨：<input type="text" name="title"><br>
    您的信箱：<input type="email" name="email"><br>
    您的姓名：<input type="text" name="user"><br>
    是否為會員：<select name="member">
        <option>會員</option>
        <option>非會員</option>
    </select><br>
    問題分類：
    <?php
    $bruhlist = array(
        "相機","鏡頭","閃光燈","腳架","電池","PS5","電視"
    );
    foreach($bruhlist as $stuff): ?>
        <input type="checkbox" name="question[]" value="<?php echo $stuff; ?>">
        <label for="cbox1"><?php echo $stuff;?></label>
    <?php endforeach?>
    <br>
    意見內容：<br>
    <textarea name="content"></textarea><br>
    <input type="submit" value="提交">
</form>


</body>
</html>