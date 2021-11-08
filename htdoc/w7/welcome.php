標題主旨：&nbsp<?php echo $_POST["title"]; ?><br>
您的信箱：&nbsp<?php echo $_POST["email"]; ?><br>
您的姓名：&nbsp<?php echo $_POST["user"]; ?><br>
是否為會員：&nbsp<?php echo $_POST["member"]; ?><br>
問題分類：&nbsp
<?php
if(!empty($_POST['question']))
foreach($_POST['question'] as $stuff) {
    echo $stuff;echo ",";
}
?><br>
意見內容：&nbsp<?php echo $_POST["content"]; ?>