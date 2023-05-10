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
                <input type="text" placeholder="торт" name="hashtag" required>
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

        <?php
        include("db.php");
        include("connect.php");
        $hashtags = get_hashtags();
        $fields = get_fields();
        $connections = get_connections();
        $alone = get_alone();

        ?>

        <form action="addConnections.php" method="post" class="select__list">
            <div class="select">
                <select name="hashtag" id="">
                    <option disabled selected hidden value="">Выберите хэштэг</option>
                    <?php
                    foreach ($hashtags as $hashtag) {
                        echo '<option value="' . $hashtag['id'] . '">#' . $hashtag['name'] . '</option>';
                    }
                    ?>
                </select>

            </div>
            <div class="select">
                <select name="field" id="">
                    <option disabled selected hidden value="">Выберите область</option>
                    <?php
                    foreach ($fields as $field) {
                        echo '<option value="' . $field['id'] . '">' . $field['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <button class="btn btn-select">Сделать связь</button>
        </form>

        <h3>Созданные связи:</h3>
        <form action="delete.php" method="post">
            <ul>
                <?php
                foreach ($connections as $connection) {
                    echo '<li class="con-dlt"> #' . $connection['hashtagname'] . " - " . $connection['fieldname'] . ' <button type="submit" name="button" value="'. $connection['id'] .'">Удалить</button> </li>';
                }
                ?>
            </ul>
        </form>


        <h3>Хэштэги без связей</h3>
        <ul>
            <?php
            foreach ($alone as $al) {
                echo '<li> #' . $al['name'] . '</li>';
            }
            ?>
        </ul>

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