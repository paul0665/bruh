<html>
<head>
    <?php /*
簡易計算機
*/
    //自訂函數
    function calculate($class,$numA,$numB)
    {
        switch ($class)
        {
            case 1:
                $end = $numA + $numB;
                break;
            case 2:
                $end = $numA - $numB;
                break;
            case 3:
                $end = $numA * $numB;
                break;
            default:
                $end = $numA / $numB;
        }
        return $end;
    }
    //判斷$_POST是否有東西 如有才執行
    if(isset($_POST['numA']) and isset($_POST['numB']) and isset($_POST['class']))
    {
        $numA = $_POST['numA'];
        $numB = $_POST['numB'];
        $class = $_POST['class'];
        $end = calculate($class,$numA,$numB);
    }
    ?><title>簡易計算機</title>
</head>
<body>
<input onclick="history.go( -1 );return true;" value="上頁back" style="background-color: rgb(192, 227, 181);" type="button"><br>
<form id="form1" name="form1" method="post" action="">
    <p>第一個數字:
        <label>
            <input name="numA" id="numA" type="text">
        </label>
    </p>
    <p>第二個數字:
        <label>
            <input name="numB" id="numB" type="text">
        </label>
    </p>
    <p>選擇運算符號:
        <label>
            <select name="class" id="class">
                <option value="1">+</option>
                <option value="2">-</option>
                <option value="3">*</option>
                <option value="4">/</option>
            </select>
        </label>
    </p>
    <p>
        <label>
            <input value="運算" type="submit">
        </label>
        <label>
            <input value="重新填寫" type="reset">
        </label>
    </p>
    <p>結果:
        <label>
            <input name="textfield" id="textfield" value="<?php echo $end;?>" type="text">
        </label><br><br>
    </p>
</form>
</body>
</html>
