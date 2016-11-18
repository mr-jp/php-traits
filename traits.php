<?php
trait CanQuack
{
    public function quack()
    {
        echo "{$this->className}s can quack. ";
    }
}

trait CannotQuack
{
    public function quack()
    {
        echo "{$this->className}s cannot quack. ";
    }
}

trait CanFly
{
    public function fly()
    {
        echo "{$this->className}s can fly. ";
    }
}

trait CannotFly
{
    public function fly()
    {
        echo "{$this->className}s cannot fly. ";
    }
}

trait CanSwim
{
    public function swim()
    {
        echo "{$this->className}s can swim. ";
    }
}

trait CannotSwim
{
    public function swim()
    {
        echo "{$this->className}s cannot swim. ";
    }
}

class Bird
{
    protected $className;

    public function __construct()
    {
        $this->className = get_class($this);
    }

    public function describe()
    {
        echo $this->fly();
        echo $this->quack();
        echo $this->swim();
        echo "\n";
    }
}

class Duck extends Bird
{
    use CanQuack, CanFly, CanSwim;
}

class Turkey extends Bird
{
    use CannotQuack, CannotFly, CannotSwim;
}

class Penguin extends Bird
{
    use CannotQuack, CannotFly, CanSwim;
}

// Display duck
$donald = new Duck;
$donald->describe();

// Display Turkey
$bob = new Turkey;
$bob->describe();

// Display Penguin
$bob = new Penguin;
$bob->describe();
