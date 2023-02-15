<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="header_wrapper">
            <img src="123.jpg" alt="logo">
            <h1>ДЗ №1 Hello, World!</h1>

        </div> 

    </header>
    <main>
     <table>
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Группа</th>
        </tr>
        <?php
        for ($i = 1; $i < 6; $i++) {
            echo "<tr>
            <th>".$i."</th>
            <td>Мария</td>
            <td>Кожаринова</td>
            <td>221-322</td>
            </tr>";
        }
        ?>
     </table>
        <div class="img_arr">
        <?php
            $images = array("1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg");
            for ($i = 0; $i < 5; $i++) {
            echo "<img src=\"$images[$i]\" width=\"200px\">
            ";
            }
        ?>
        </div>
    
    </main>
    <footer>
        <p>Выполнила студентка группы 221-322 Кожаринова Мария Павловна</p>
    </footer>
</body>

</html>