<?php
abstract class HumanAbstract
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function getGreetings(): string;
    abstract public function getMyNameIs(): string;

    public function introduceYourself(): string
    {
        return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
    }
}

class RussianHuman extends HumanAbstract
{
    public function getGreetings(): string
    {
        return 'Привет';
    }

    public function getMyNameIs(): string
    {
        return 'Меня зовут';
    }
}

class EnglishHuman extends HumanAbstract
{
    public function getGreetings(): string
    {
        return 'Hello';
    }

    public function getMyNameIs(): string
    {
        return 'My name is';
    }
}

$russian = new RussianHuman('Мария');
$english = new EnglishHuman('Maria');

echo $russian->introduceYourself();
echo '<br>';
echo $english->introduceYourself();

echo '<br>';
class Cat {
    private $name;
    private $color;

    public function __construct(string $name, string $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function sayHello(): void {
        echo "Меня зовут {$this->name}, и я {$this->color} цвета.";
    }
}

$cat = new Cat('Милашик', 'белого');

echo $cat->sayHello();

echo '<br>';
interface CalculateSquare
{
    public function calculateSquare(): float;
}

class Circle implements CalculateSquare
{
    const PI = 3.1416;

    private $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function calculateSquare(): float
    {
        return self::PI * ($this->r ** 2);
    }
}

class Rectangle implements CalculateSquare
{
    private $x;
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateSquare(): float
    {
        return $this->x * $this->y;
    }
}

class Square implements CalculateSquare
{
    private $x;

    public function __construct(float $x)
    {
        $this->x = $x;
    }

    public function calculateSquare(): float
    {
        return $this->x ** 2;
    }
}

class Triangle
{
    private $a;
    private $h;

    public function __construct(float $a, float $h)
    {
        $this->a = $a;
        $this->h = $h;
    }

    public function calculateSquare(): float
    {
        return 0.5 * $this->a * $this->h;
    }
}

$objects = [
    new Square(5),
    new Rectangle(2, 4),
    new Circle(5),
    new Triangle(2,5)
];


foreach ($objects as $object) {
    
    if ($object instanceof CalculateSquare) {
        
        echo 'Площадь объекта класса ' . get_class($object) . ': ' . $object->calculateSquare();
        echo '<br>';
    } else {
        
        echo 'Объект класса ' . get_class($object) . ' не реализует интерфейс CalculateSquare.';
        echo '<br>';
    }
}

class Post

{
    private $title;
    private $text;

    public function __construct(string $title, string $text)

    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle()

    {
        return $this->title;
    }
    public function setTitle($title): void

    {
        $this->title = $title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text): void

    {
        $this->text = $text;
    }

}

class Lesson extends Post

{
    private $homework;

    public function __construct(string $title, string $text, string $homework)

    {
        parent::__construct($title, $text);
        $this->homework = $homework;
    }

    public function getHomework(): string

    {
        return $this->homework;
    }

    public function setHomework(string $homework): void

    {
        $this->homework = $homework;
    }

}

class PaidLesson extends Lesson {
    private $price;
  
    public function getPrice() {
      return $this->price;
    }
  
    public function setPrice($price) {
      $this->price = $price;
    }
  
    public function __construct($title, $text, $homework, $price) {
      parent::__construct($title, $text, $homework);
      $this->price = $price;
    }
  }

  $lesson = new PaidLesson(
    "Урок о наследовании в PHP",
    "Лол, кек, чебурек",
    "Ложитесь спать, утро вечера мудренее",
    99.90
  );

  var_dump($lesson);



?>
