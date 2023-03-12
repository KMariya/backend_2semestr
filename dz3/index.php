<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Лабораторная №4</title>
</head>

<body>
    <header>
        <div class="header_wrapper">
            <img src="123.jpg" alt="logo">
            <h1>ДЗ №4 Solve the equation</h1>
        </div>
    </header>
    <main>
        <div class="main_wrapper">
            <p>Введите уравнение вида</p>
            <p><span>A + x = B </span> или <span> A - x = B ,</span></p>
            <p>где x - неизменный</p>
            <form method="POST">
                <div class="inputs">
                    <input class="equat" type="text" name="equation" placeholder="Введите уравнение">
                    <input class="button" type="submit" value="Решить">
                </div>

            </form>
            <span class="text_answer">Ответ:</span>
            <textarea readonly class="res_answer" name="answer">
        <?php
        if (!empty($_POST)) {
            $equation = $_POST["equation"];
            $equation = str_replace(' ', '', $equation);
            function getOperand($num)
            {
                if (strpbrk($num, '=') == TRUE) {
                    $num = str_replace('=', '', $num);
                    return (int)$num;
                }
            }
            function getOperator($num)
            {
                if (strpbrk($num, '+') == TRUE) {
                    return 0;
                }
                if (strpbrk($num, '-') == TRUE) {
                    return 1;
                }
            }
            switch (getOperator($equation)) {
                case 0:
                    $op1 = strstr($equation, '+', true);
                    $op2 = getOperand(strstr($equation, '='));
                    echo $result = $op2 - $op1;
                    break;
                case 1:
                    $op1 = strstr($equation, '-', true);
                    $op2 = getOperand(strstr($equation, '='));
                    echo $result = - ($op2 - $op1);
                    break;
            }
        };
        ?>
        </textarea>
        </div>

    </main>
    <footer>
        <p>Выполнила студентка группы 221-322 Кожаринова Мария Павловна</p>
    </footer>
</body>

</html>