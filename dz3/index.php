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
                    <input class="equat" type="text" name="equation" placeholder="10+x=33">
                    <input class="button" type="submit" value="Решить">
                </div>

            </form>
            <span class="text_answer">Ответ:</span>
            <textarea readonly class="res_answer" name="answer">
        <?php
        if (!empty($_POST)) {
            $input = $_POST['equation'];
            $input = str_replace(' ', '', $input);
        if (strpos($input, '=') !== false) {
            $parts = explode("=", $input);
            $leftPart = $parts[0]; 
            $leftNumber = intval($leftPart); 
            $rightPart = $parts[1];
            $rightNumber = intval($rightPart);
            $left = preg_split('/(\d+)([\+\-\*\/])([x])/i', $leftPart, -1, PREG_SPLIT_DELIM_CAPTURE);
            $op = $left[2];
            if ($op == "+"){
                $x = $rightNumber - $leftNumber;
            }
            elseif ($op == "-"){
                $x = $leftNumber - $rightNumber;
            }
            elseif ($op == "/"){
                $x = $leftNumber / $rightNumber;
            }
            elseif ($op == "*"){
                $x = $rightNumber / $leftNumber;
            }
            echo $x;
            }
        }
        ?>
        </textarea>
        </div>

    </main>
    <footer>
        <p>Выполнила студентка группы 221-322 Кожаринова Мария Павловна</p>
    </footer>
</body>

</html>