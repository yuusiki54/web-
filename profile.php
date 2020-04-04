
<?php

$n = mt_rand(1,3);

if($n === 1){
    $message = "デザイナー見習いです";
}elseif($n === 2){
    $message = "プログラミングを勉強中です";
}else{
    $message = "PHPちょっと分かります";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $message; ?></p>
</body>
</html>
