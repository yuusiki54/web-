<?php

$n = mt_rand(1, 3);

if ($n === 1) {
    $message = 'プログラマー見習いです';
} elseif ($n === 2) {
    $message = 'バックエンドのエンジニア目指してます';
} else {
    $message = '言語問わず学んでいきたいです';
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>Yuyaのポートフォリオサイト</title>
    <link rel="icon" href="favicon.ico">
    <meta name="description" content="Yuyaのポートフォリオサイトです。">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <header>
        <div class="container">
            <div class="icon">
                <img src="img/IMG_5064.png" width="120" height="120" alt="プロフィールアイコン">
            </div>
            <div class="info">

                <h1>青木 祐也</h1>
                <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
                <ul>
                    <div class="first-icon">
                        <li>
                            <a href="https://qiita.com/yuusiki" target="_blank">
                                <img src="img/quiita.jpeg" width="20" height="20" alt="Quiitaへのリンク画像です">
                            </a>

                        </li>

                        <li>
                            <a href="https://github.com/yuusiki54" target="_blank">
                                <img src="img/github.png" width="20" height="20" alt="githubへのリンク画像です">
                            </a>
                        </li>

                    </div>
                </ul>
            </div>
        </div>

    </header>

    <!-- 作品紹介 -->
    <section class="works">
        <h1>WORKS</h1>