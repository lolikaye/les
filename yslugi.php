<?
$connection = new PDO('mysql:host=localhost; dbname=les; charset=utf8', 'root', '');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Лескомплект</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="#">Лескомплект</a>
</div>
<div class="nav">
    <a href="index.php">Главная</a>
    <a href="yslugi.php">Услуги</a>
    <a href="cont.php">Контакты</a>
</header>
<main>
<div class="info2">
<? $info2 = $connection->query("SELECT * FROM yslugi");
                foreach ($info2 as $new) { ?>
                        <p>
                            <?= $new['text'] ?>
                        </p>
                <?
                }    ?>

        </div>

        <div class="info3">
        <? $info3 = $connection->query("SELECT * FROM yslugi2");
                foreach ($info3 as $new) { ?>
                        <p>
                            <?= $new['text'] ?>
                        </p>
                <?
                }    ?>
        </div>
</main>
