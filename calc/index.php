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
            <h1>ДЗ №4 Калькулятор</h1>
        </div>
    </header>
    <main>
        <div class="calc__wrapper" id="calc">
            <form action="" method="post">
                <div>
                    <label class="label">
                        <input class="equation__input" name="equation">
                    </label>
                    <button type="reset" class="button__clear">C</button>
                    
                    <textarea class="equation__result" id="output"name="output" cols=35>
                        <?php
                        
                        ?>
                    </textarea>
                    <div class="items">
                        <span class="num">1</span>
                        <span class="num">2</span>
                        <span class="num">3</span>
                        <span class="oper">+</span>
                        <span class="num">4</span>
                        <span class="num">5</span>
                        <span class="num">6</span>
                        <span class="oper">-</span>
                        <span class="num">7</span>
                        <span class="num">8</span>
                        <span class="num">9</span>
                        <span class="oper">÷</span>
                        <span class="num">(</span>
                        <span class="num">0</span>
                        <span class="num">)</span>
                        <span class="oper">*</span>
                        <button type="submit" class="button__submit">=</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="index.js"></script>
    <footer>
        <p>Выполнила студентка группы 221-322 Кожаринова Мария Павловна</p>
    </footer>
</body>

</html>