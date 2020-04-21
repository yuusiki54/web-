<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算機</title>
</head>

<body>
    <h1>簡単な計算機.</h1>
    <pre>
        <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $kigou = $_POST["kigou"];
        $kekka = 0;
        switch ($kigou) {
            case "plus":
                $kekka = $num1 + $num2;
                break;
            case "minus":
                $kekka = $num1 - $num2;
                break;
            case "mul":
                $kekka = $num1 * $num2;
                break;
            case "div":
                $kekka = $num1 / $num2;
        }
        ?>
    </pre>
    <p>数字を入力してください</p>
    <form action="calc.php" method="POST">
        <input type="text" name="num1" value="<?php echo $num1; ?>">
        <select name="kigou" size="1">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="mul">×</option>
            <option value="div">÷</option>
        </select>
        <input type="text" name="num2" value="<?php echo $num2; ?>">
        <input type="submit" value="=">
        <?php echo $kekka; ?>

    </form>
</body>

</html>