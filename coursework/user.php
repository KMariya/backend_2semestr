<?php session_start();
if (isset($_SESSION['user'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>

    <body>
        <h1>
            <?php
            echo ("Вы вошли как " . $_SESSION['user']['name']);
            ?>
        </h1>
        <div>
            <form class="hashtag" action="addHashtag.php" method="post" accept-charset="UTF-8">
                <label for="hashtag">Введите хэштэг: </label>
                <input type="text" placeholder="#торт" name="hashtag" required>
                <button class="btn btn-2">Добавить</button>
            </form>

        </div>
        <div>
            <form class="field" action="addField.php" method="post">
                <label for="field">Область знания: </label>
                <input type="text" placeholder="Кулинария" name="field" required>
                <button class="btn btn-2">Добавить</button>
            </form>
        </div>
        <div>
        <form action="exit.php" method="post">
            <input class="btn btn-exit" type="submit" value="Выйти">
        </form>
    </div>



    </body>

    </html>

<?php } else { ?>
    <h2>Вы не авторизованы</h2>

    <div>
        <form action="exit.php" method="post">
            <input type="submit" value="Выйти">
        </form>
    </div>
<?php }
?>