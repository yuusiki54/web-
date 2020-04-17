<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1 class="font-weight-normal">PHP</h1>
    </header>

    <main>
        <h2>Practice</h2>

        <?php
        for($i = 1;$i <= 365;$i++):
            $date = strtotime("{$i}day");
            echo date('n/j(D)',$date);
            echo "<br>";
        endfor;
        
        // echo date('n/j(D)',strtotime('+2day'));
        ?>

    </main>

</body>

</html>